<?php

  class Controller
  {
      /**
       * @param $model
       */
        public function model($model)
        {
            require_once('../app/model/' . $model . '.php');
        }

      /**
       * @param $view
       * @param array $data
       */
        public function view($view, $data = [])
        {
            require_once ('../app/view/' . $view . '.php');
        }
  }
