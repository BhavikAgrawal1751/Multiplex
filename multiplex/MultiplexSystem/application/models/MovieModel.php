<?php
    class MovieModel extends CI_Model{
        public function minsert() {
            $indId = $this->input->post('indId');
            $catId = $this->input->post('catId');
            $multId = $this->input->post('multId');
            $moName = $this->input->post('moName');
            $moCast = $this->input->post('moCast');
            $moPrice = $this->input->post('moPrice');
            $moRating = $this->input->post('moRating');
            $moExp = $this->input->post('moExp');
            $stat = $this->input->post('stat');
            $moDesc = $this->input->post('moDesc');
            $moPost = $_FILES['moPost']['name'];
            $moImg = $_FILES['moImg']['name'];
            $moRevi = $this->input->post('moRevi');
            $moTrailer = $this->input->post('moTrailer');
            $moLang = $this->input->post('moLang');
            $scr = $this->input->post('scr');
            $moDura = $this->input->post('moDura');
        
            $config = array(
                'upload_path' => "./images/",
                'allowed_types' => "*",
                'overwrite' => TRUE,
                'max_size' => "5242880",
                'max_height' => "1000000",
                'max_width' => "1000000",
                'encryption_key' => true
            );
        
            $this->load->library('upload', $config);
        
            $ins = array(
                "industry_id" => $indId,
                "category_id" => $catId,
                "multiplex_id" => $multId,
                "movie_name" => $moName,
                "movie_cast" => $moCast,
                "movie_price" => $moPrice,
                "movie_rating" => $moRating,
                "movie_experience" => $moExp,
                "status" => $stat,
                "movie_description" => $moDesc,
                "movie_review" => $moRevi,
                "movie_trailer" => $moTrailer,
                "movie_language" => $moLang,
                "screen" => $scr,
                "movie_duration" => $moDura
            );
        
            if ($this->upload->do_upload('moImg')) {
                $data = array('upload_data' => $this->upload->data());
                $ins['movie_images'] = $moImg;
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        
            if ($this->upload->do_upload('moPost')) {
                $data = array('upload_data' => $this->upload->data());
                $ins['movie_poster'] = $moPost;
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        
            $this->db->insert('movie', $ins);
        }

        //================================
        //================================
        public function mgetMovIndustry($movIndustryId){
            $this->db->where('industry_id', $movIndustryId);
            $data = $this->db->get('moviecategory')->result();
            foreach($data as $row) { ?>
                <option value="<?php echo $row->category_id ?>"> <?php echo $row->category_name ?> </option>
            <?php }
        }

        //===============medit================
        //================mupdate====================
        public function movieindustryTable($editid){
            return $this->db->get('movieindustry')->result();
        }

        public function moviecategoryTable($editid){
            $this->db->group_by('category_name');
            return $this->db->get('moviecategory')->result();
        }

        public function multiplexTable($editid){
            return $this->db->get('multiplex')->result();
        }

        public function medit($editid){
            $this->db->where('movie_id', $editid);
            return $this->db->get('movie')->row();
        }

        public function mupdate($upid){
            $indId = $this->input->post('indId');
            $catId = $this->input->post('catId');
            $multId = $this->input->post('multId');
            $moName = $this->input->post('moName');
            $moCast = $this->input->post('moCast');
            $moPrice = $this->input->post('moPrice');
            $moRating = $this->input->post('moRating');
            $moExp = $this->input->post('moExp');
            $stat = $this->input->post('stat');
            $moDesc = $this->input->post('moDesc');
            $moPost = $_FILES['moPost']['name'];
            $moImg = $_FILES['moImg']['name'];
            $moRevi = $this->input->post('moRevi');
            $moTrailer = $this->input->post('moTrailer');
            $moLang = $this->input->post('moLang');
            $scr = $this->input->post('scr');
            $moDura = $this->input->post('moDura');
        

        // Upload configuration for moImg
        $config = array(
            'upload_path' => "./images/",
            'allowed_types' => "*",
            'overwrite' => TRUE,
            'max_size' => "5242880", 
            'max_height' => "1000000",
            'max_width' => "1000000",
            'encryption_key' => true
        );
        $this->load->library('upload', $config);

        // Initialize an array to store updated data
        $upData = array(
            "industry_id" => $indId,
            "category_id" => $catId,
            "multiplex_id" => $multId,
            "movie_name" => $moName,
            "movie_cast" => $moCast,
            "movie_price" => $moPrice,
            "movie_rating" => $moRating,
            "movie_experience" => $moExp,
            "status" => $stat,
            "movie_description" => $moDesc,
            "movie_review" => $moRevi,
            "movie_trailer" => $moTrailer,
            "movie_language" => $moLang,
            "screen" => $scr,
            "movie_duration" => $moDura
        );

        // Upload 'moImg' if not empty
        if (!empty($moImg)) {
            if ($this->upload->do_upload('moImg')) {
                $data = array('upload_data' => $this->upload->data());
                $upData['movie_images'] = $moImg;
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        }

        // Upload 'moPost' if not empty
        if (!empty($moPost)) {
            if ($this->upload->do_upload('moPost')) {
                $data = array('upload_data' => $this->upload->data());
                $upData['movie_poster'] = $moPost;
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        }
        
        // Update data in the database
        $this->db->where('movie_id', $upid);
        $this->db->update('movie', $upData);

        }
    }
?>