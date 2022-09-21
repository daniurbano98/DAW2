<?php 

    class Student{
        private $id;
        private $name;
        private $surname;
        private $avg_marks;

                


        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of surname
         */ 
        public function getSurname()
        {
                return $this->surname;
        }

        /**
         * Set the value of surname
         *
         * @return  self
         */ 
        public function setSurname($surname)
        {
                $this->surname = $surname;

                return $this;
        }

        /**
         * Get the value of avg_marks
         */ 
        public function getAvg_marks()
        {
                return $this->avg_marks;
        }

        /**
         * Set the value of avg_marks
         *
         * @return  self
         */ 
        public function setAvg_marks($avg_marks)
        {
                $this->avg_marks = $avg_marks;

                return $this;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }


    $student = new student();



    
