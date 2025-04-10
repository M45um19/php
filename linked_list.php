<?php
    class node {
        public $data;
        public $next;

        public function __construct($data){
            $this->data = $data;
            $this->next = null;
        } 
    }

    class linkedlist {
        public $head;

        public function __construct(){
            $this->head = null;
        }

        function create_node ($data){
            $new_node = new node($data);
            if($this->head == null){
                $this->head = $new_node;
            }else{
                $current = $this->head;

                while ($current->next !== null){
                    $current = $current->next;
                }
                $current->next= $new_node;
            }
        }
        public function print () {
            $current = $this->head;
            
            while ($current !== null){
                echo $current->data;
                $current = $current->next;
            }
        }

        public function delete ($value) {
            if($this->head->data == $value){
                $this->head = $this->head->next;
            }
            $current = $this->head;

            while($current->next !== null && $current->next->data !== $value){
                $current = $current->next;
            }

            if ($current->next !== null){
                $current->next = $current->next->next;
            }

        }
    }

    

    $list = new linkedlist();

    $list->create_node(5);
    $list->create_node(10);
    $list->print();
    $list->delete(10);
    $list->create_node(15);
    $list->print();
?>
