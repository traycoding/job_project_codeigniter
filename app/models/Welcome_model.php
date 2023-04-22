<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProducts()
    {
        $q = $this->db->get('products');
        if ($q->num_rows() > 0) {
            foreach (($q->result()) as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function getChartData($user_id = null)
    {
        if (!$this->Admin) {
            $user_id = $this->session->userdata('user_id');
        }
        if ($this->db->dbdriver == 'sqlite3') {
            $this->db->select("strftime('%Y-%m', date) as month, SUM(total) as total, SUM(total_tax) as tax, SUM(total_discount) as discount")
            ->where("date >= datetime('now','-6 month')", null, false)
            // ->order_by("strftime('%Y-%m', date)", 'asc')
            ->group_by("strftime('%Y-%m', date)");
        } else {
            $this->db->select("date_format(date, '%Y-%m') as month, SUM(total) as total, SUM(total_tax) as tax, SUM(total_discount) as discount")
            ->where('date >= date_sub( now() , INTERVAL 6 MONTH)', null, false)
            // ->order_by("date_format(date, '%Y-%m')", 'asc')
            ->group_by("date_format(date, '%Y-%m')");
        }
        if ($user_id) {
            $this->db->where('created_by', $user_id);
        }
        if ($store_id = $this->session->userdata('store_id')) {
            $this->db->where('store_id', $store_id);
        }
        $q = $this->db->get('sales');
        if ($q->num_rows() > 0) {
            foreach (($q->result()) as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function getUserGroups()
    {
        $this->db->order_by('id', 'desc');
        $q = $this->db->get('users_groups');
        if ($q->num_rows() > 0) {
            foreach (($q->result()) as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function syncStoreQty()
    {
        $products = $this->getAllProducts();
        foreach ($products as $product) {
            $this->db->insert('product_store_qty', ['product_id' => $product->id, 'store_id' => 1, 'quantity' => $product->quantity]);
        }
        $this->db->update('settings', ['version' => '4.0.6'], ['setting_id' => 1]);
    }

    public function topProducts($user_id = null)
    {
        $m = date('Y-m');
        if (!$this->Admin) {
            $user_id = $this->session->userdata('user_id');
        }
        $this->db->select($this->db->dbprefix('products') . '.code as product_code, ' . $this->db->dbprefix('products') . '.name as product_name, sum(' . $this->db->dbprefix('sale_items') . '.quantity) as quantity')
        ->join('products', 'products.id=sale_items.product_id', 'left')
        ->join('sales', 'sales.id=sale_items.sale_id', 'left')
        ->order_by('sum(' . $this->db->dbprefix('sale_items') . '.quantity)', 'desc')
        ->group_by('sale_items.product_id')
        ->limit(10)
        ->like("{$this->db->dbprefix('sales')}.date", $m, 'both');
        if ($user_id) {
            $this->db->where('created_by', $user_id);
        }
        if ($this->session->userdata('store_id')) {
            $this->db->where('store_id', $this->session->userdata('store_id'));
        }
        $q = $this->db->get('sale_items');
        if ($q->num_rows() > 0) {
            foreach (($q->result()) as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function userGroups()
    {
        $ugs = $this->getUserGroups();
        if ($ugs) {
            foreach ($ugs as $ug) {
                $this->db->update('users', ['group_id' => $ug->group_id], ['id' => $ug->user_id]);
            }
            return true;
        }
        return false;
    }

    public function browse_jobs_by_category(){
        $query = $this -> db -> query('SELECT c.job_category_id, c.name, c.job_categories_keys, IFNULL(a.counts,0) AS count_jobs
         FROM tec_job_categories AS c LEFT JOIN (
         SELECT using_job_category_id, COUNT( * ) AS counts
         FROM tec_job_ads where tec_job_ads.status = 1 AND tec_job_ads.is_approved = 1 AND date_available>=CURDATE() GROUP BY using_job_category_id
         ) AS a ON c.job_category_id = a.using_job_category_id
         ORDER BY c.job_category_id ');
        return $query;    
    }
     /* This function use to retrieve all locations and count
     * $this->model_jobs->brow_jobs_by_location();
     */
    public function brow_jobs_by_location(){
        $query = $this -> db -> query('SELECT l.name, l.job_location_id, IFNULL(a.counts,0) AS countlocations
         FROM tec_job_locations AS l LEFT JOIN (
         SELECT using_job_location_id, COUNT( * ) AS counts
         FROM tec_job_ads where tec_job_ads.status = 1 AND tec_job_ads.is_approved = 1 AND date_available>=CURDATE() GROUP BY using_job_location_id
         ) AS a ON l.job_location_id = a.using_job_location_id
         ORDER BY l.job_location_id');
        return $query;  
    }
     /* This function use to retrieve all companies and count
     * $this->model_jobs->brow_jobs_by_company();
     */
    public function brow_jobs_by_company(){
        $query = $this -> db -> query('SELECT c.name as name ,c.company_keys as company_key , IFNULL(a.counts,0) AS countcompany
         FROM tec_companies AS c 
         Inner JOIN tec_employers as e ON e.employer_id = c.using_employer_id
         Inner JOIN (
         SELECT using_employer_id, COUNT( * ) AS counts
         FROM tec_job_ads where tec_job_ads.status = 1 AND tec_job_ads.is_approved = 1 AND date_available>=CURDATE()
         and using_employer_id != 0
         GROUP BY using_employer_id
         ) AS a ON e.employer_id = a.using_employer_id
         ORDER BY c.company_id desc');
        return $query;
    }

     public function list_lastest_jobs($limit){
        $this -> db -> select('job_ads.is_featured_job,job_ads.featured_job_status,job_ads.created_date as job_create_date,job_ads.text_description as job_description,job_ads.job_keys, companies.name as company_name, job_ads.title as job_title, job_ads.job_keys as job_key, job_ads.date_available as date_available, job_locations.name as location_name, job_locations.name as location_name, job_sub_categories.name as sub_categoris_name');
        $this -> db -> from('job_ads');
        $this -> db -> join('job_categories', 'using_job_category_id=job_category_id');
        $this -> db -> join('job_sub_categories', 'using_job_sub_category_id=job_sub_category_id','left');
        $this -> db -> join('job_locations', 'using_job_location_id=job_location_id');
        $this -> db -> join('companies', 'companies.company_id=job_ads.using_company_id');
        $this -> db -> where('date_available>=CURDATE()');
        $this -> db -> where('job_ads.status','1');
        $this -> db -> where('job_ads.is_approved','1');
        $this -> db -> order_by('job_ads.created_date','DESC');
        $this -> db -> limit($limit);
        return $this -> db -> get();
    }
    public function get_count_categories(){
        $this->db->select('id')->from('job_categories');
        $query=$this->db->count_all_results();
        return  $query;
    }
    public function browse_jobs_by_category_limit($limit,$start){
         $this->db->select("job_categories.*")
                ->from('job_categories')
                ->where('status',1);
        $this->db->limit($limit,$start);
        $q=$this->db->order_by('job_categories.job_category_id','DESC')->get();
        return $q->result();
    }
    public function get_jobseeker_profile_info_all($limit=null,$start=null){
      $this->db -> select('job_seekers.*,is_resume, job_categories.name as cat_name,job_locations.name as loc_name,first_name,last_name');
      $this->db -> from('job_seekers');
      $this->db -> join('seeker_documents','seeker_documents.using_seeker_id=job_seekers.job_seeker_id', 'left');
      $this->db -> join('job_categories','job_categories.job_category_id=job_seekers.main_job_category','left');
      $this->db -> join('job_locations','job_locations.job_location_id=job_seekers.main_job_location','left');

      $this->db -> where('job_seekers.status',1);
      $this->db -> where('job_seekers.is_looking_for_job',1);
      $this->db -> group_by('job_seeker_id');
      $this->db -> order_by('job_seeker_id','DESC');
      $this->db -> limit($limit,$start);
      return $this->db -> get();

    }
    public function topCompanies($limit=null){
        $this -> db -> select('companies.*');
        $this -> db -> from('companies');
        $this -> db -> join('job_ads', 'job_ads.using_company_id= companies.company_id');
        $this -> db -> where('job_ads.is_featured_job','YES');
        $this -> db -> where('job_ads.featured_job_status',1);
        $this -> db -> where('companies.logo != ',"");
        $this -> db -> where('companies.name != ','jobpending.com');
        $this -> db -> group_by('companies.name');
        $this -> db -> order_by('job_ads.job_ads_id', 'DESC');
        $this -> db -> limit($limit);
        return $this -> db -> get(); 

        return $query;
    }  
    public function getContact(){
        $query = $this->db->select('*')
                          ->from('contact_persons')
                          ->order_by('contact_persons.contact_person_id','DESC')
                          ->limit(1)
                          ->get();
             if ($query->num_rows() > 0 ) {
                return $query->row();
            }       
        return false;
    }
    public function login($cm,$id){
        $query = $this->db->select('email,password,'.$id)
                          ->from($cm)
                          ->get();
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
   public function list_job_by_employer($start,$offset){
        $this ->db -> select(' job_ads.salary as salary , job_ads.is_featured_job,job_ads.created_date as job_create_date,job_ads.job_keys as job_key, job_ads.title as job_title, job_ads.hiring as job_hire, job_ads.date_available as date_available, job_locations.name as location_name, job_sub_categories.name as sub_categoris_name,job_categories.name as job_categories_name,job_ads.status as status, job_ads.job_ads_id as job_id');
        $this ->db -> from('job_ads');
        $this ->db -> join('job_categories', 'using_job_category_id=job_category_id');
        $this ->db -> join('job_sub_categories', 'using_job_sub_category_id=job_sub_category_id','left');
        $this ->db -> join('job_locations', 'using_job_location_id=job_location_id');
        // $this ->db -> join('contact_persons', 'using_contact_person_id=contact_person_id');
        $this ->db -> join('employers', 'employers.employer_id=job_ads.using_employer_id');
        // $this ->db -> join('companies', 'companies.company_id=job_ads.using_company_id');
        $this ->db -> where('job_ads.status','1');
        // $this ->db -> where('job_ads.is_approved','1');
        // $this ->db -> where('job_ads.using_employer_id',$employer_id);
        // $this ->db -> where('employers.employer_id !=','0');
        $this ->db -> order_by('job_ads.job_ads_id ','DESC');
        $this->db->limit($start,$offset);
        return $this ->db -> get()->result();
    }
      public function employer_count(){
        $this ->db -> select(' job_ads.salary as salary , job_ads.is_featured_job,job_ads.created_date as job_create_date,job_ads.job_keys as job_key, job_ads.title as job_title, job_ads.hiring as job_hire, job_ads.date_available as date_available, job_locations.name as location_name, job_sub_categories.name as sub_categoris_name,job_categories.name as job_categories_name,job_ads.status as status, job_ads.job_ads_id as job_id');
        $this ->db -> from('job_ads');
        $this ->db -> join('job_categories', 'using_job_category_id=job_category_id');
        $this ->db -> join('job_sub_categories', 'using_job_sub_category_id=job_sub_category_id','left');
        $this ->db -> join('job_locations', 'using_job_location_id=job_location_id');
        // $this ->db -> join('contact_persons', 'using_contact_person_id=contact_person_id');
        $this ->db -> join('employers', 'employers.employer_id=job_ads.using_employer_id');
        // $this ->db -> join('companies', 'companies.company_id=job_ads.using_company_id');
        $this ->db -> where('job_ads.status','1');
        // $this ->db -> where('job_ads.is_approved','1');
        // $this ->db -> where('job_ads.using_employer_id',$employer_id);
        // $this ->db -> where('employers.employer_id !=','0');
        $this ->db -> order_by('job_ads.job_ads_id','DESC');
        return $this ->db -> get();
    }
    public function getEmployerID(){

        $query = $this->db->select('email,password,employer_id')->from('employers')->get();
        if($query->num_rows > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    public function get_jobseeker_id($email,$password){
        $query = $this->db->select('job_seeker_id as id')->from('job_seekers')->where('email',$email)->where('password',$password)->get();
        if($query->num_rows()>0){
            return $query->row();
        }
        return false;
    }



    public function list_job_by_employer_id($employer_id){
        $this ->db -> select(' job_ads.salary as salary , job_ads.is_featured_job,job_ads.created_date as job_create_date,job_ads.job_keys as job_key, job_ads.title as job_title, job_ads.hiring as job_hire, job_ads.date_available as date_available, job_locations.name as location_name, job_sub_categories.name as sub_categoris_name,job_categories.name as job_categories_name,job_ads.status as status, job_ads.job_ads_id as job_id, job_ads.using_job_location_id as location_id, job_image');
        $this ->db -> from('job_ads');
        $this ->db -> join('job_categories', 'using_job_category_id=job_category_id');
        $this ->db -> join('job_sub_categories', 'using_job_sub_category_id=job_sub_category_id','left');
        $this ->db -> join('job_locations', 'using_job_location_id=job_location_id');
        // $this ->db -> join('contact_persons', 'using_contact_person_id=contact_person_id');
        $this ->db -> join('employers', 'employers.employer_id=job_ads.using_employer_id');
        // $this ->db -> join('companies', 'companies.company_id=job_ads.using_company_id');
        // $this ->db -> where('job_ads.status','1');
        // $this ->db -> where('job_ads.is_approved','1');
        $this ->db -> where('job_ads.using_employer_id',$employer_id);
        // $this ->db -> where('employers.employer_id !=','0');
        $this ->db -> order_by('job_ads_id','DESC');
        return $this ->db -> get();
    }

    public function getJobCategory(){
        $query = $this->db->select('*')->from('job_categories')->where('status',1)->get();
        if($query->num_rows() > 0 ){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
        else{
            return false;
        }
    }
    public function get_location(){
        $query = $this->db->select('*')->from('job_locations')->where('status',1)->get();
        if($query->num_rows()>0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
        else{
            return false;
        }
    }
    public function getEmployer($id){
        $query  = $this->db->select('*')
                           ->from('employers')
                           ->where('employer_id',$id)
                           ->get();
        if($query->num_rows() > 0){
            return $query->row();
        }
        return false;

    }
    public function getCandidate($id){
        $query = $this->db->select('*')->from('job_seekers')->where('job_seeker_id',$id)->get();
        if($query->num_rows() > 0){
            return $query->row();
        }
        return false;
    }

    public function update_pw($id,$new_pw){
        if($this->db->update('tec_employers',['password'=>$new_pw],$id)){
            return true;
        }
        return false;
    }
    public function update_employer($id,$data){
       if( $this->db->set($data)->where('employer_id',$id)->update('tec_employers')){
        return true;
       }
       return false;
    }
     public function update_candidate($id,$data){
       if( $this->db->set($data)->where('job_seeker_id',$id)->update('tec_job_seekers')){
        return true;
       }
       return false;
    }
    public function getLocation(){
        $query = $this->db->select('name,job_location_id')
                      ->from('job_locations')
                      ->get();
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }else{
            return false;
        }
    }
    public function add_job_by_employer($data){
        if($this->db->insert('job_ads',$data)){
            return true;
        }
        else{
            return false;
        }
    }
    public function register($data,$email,$cm){
       
        $query = $this->db->select('email')->from($cm)->where('email',$email)->get();
        if($query->num_rows()>0){
            return false;
        }
        else{
            $this->db->insert($cm,$data);
            return true;
        }
       
       
    }
    public function display_save_job($job_seeker_id,$limit,$start){

        $query = $this->db->select('job_favorites.job_favorite_id,job_favorites.using_job_seeker_id,job_favorites.using_job_ads_id as job_ads_id,
                job_ads.title as job_title,job_ads.using_job_location_id,job_locations.name as location_name,job_ads.using_job_category_id,job_categories.name as catetories_name')
                      ->from('job_favorites')
                      ->join('job_ads','job_ads.job_ads_id = using_job_ads_id')
                      ->join('job_locations','job_locations.job_location_id=job_ads.using_job_location_id')
                      ->join('job_categories','job_categories.job_category_id=job_ads.using_job_category_id')
                      ->where('using_job_seeker_id',$job_seeker_id)
                      ->where('job_favorites.status',1)
                      ->order_by('job_favorite_id','DESC')
                      ->limit($limit,$start)
                      ->get();
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }else{
            return false;
        }
    }
    public function display_save_job_offset($job_seeker_id){

        $query = $this->db->select('job_favorites.job_favorite_id,job_favorites.using_job_seeker_id,job_favorites.using_job_ads_id as job_ads_id,
                job_ads.title as job_title,job_ads.using_job_location_id,job_locations.name as location_name,job_ads.using_job_category_id,job_categories.name as catetories_name')
                      ->from('job_favorites')
                      ->join('job_ads','job_ads.job_ads_id = using_job_ads_id')
                      ->join('job_locations','job_locations.job_location_id=job_ads.using_job_location_id')
                      ->join('job_categories','job_categories.job_category_id=job_ads.using_job_category_id')
                      ->where('using_job_seeker_id',$job_seeker_id)
                      ->where('job_favorites.status',1)
                      ->order_by('job_favorite_id','DESC')
                      ->get();
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }else{
            return false;
        }
    }
    public function count_by_job_seekers($job_seeker_id){
        $query = $this->db->select('job_favorites.job_favorite_id,job_favorites.using_job_seeker_id,job_favorites.using_job_ads_id as job_ads_id,
                job_ads.title as job_title,job_ads.using_job_location_id,job_locations.name as location_name,job_ads.using_job_category_id,job_categories.name as catetories_name')
                      ->from('job_favorites')
                      ->join('job_ads','job_ads.job_ads_id = using_job_ads_id')
                      ->join('job_locations','job_locations.job_location_id=job_ads.using_job_location_id')
                      ->join('job_categories','job_categories.job_category_id=job_ads.using_job_category_id')
                      ->where('using_job_seeker_id',$job_seeker_id)
                      ->where('job_favorites.status',1)
                      ->order_by('job_favorite_id','DESC')
                      ->get();
        return $query;
    }
    public function save_job($job_seeker_id,$job_id){
        $this->db->insert('job_favorites',['using_job_seeker_id'=>$job_seeker_id,'using_job_ads_id'=>$job_id,'status'=>1]);
        return true;
    }
}
