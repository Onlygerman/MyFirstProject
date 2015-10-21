<?php namespace App\Http\Controllers;

  class PagesController extends  Controller {

      public function about()

      {

          $first = 'DASHA';
          return view('pages.about', compact('first'));

      }

      public function contact()

      {

          $first = 'Fox';
          return view('pages.contact', compact('first'));

      }
  }

