<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Collection;


class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function readCSV($csvFile, $array) {
        $file_handle = fopen($csvFile, 'r');
        $titleFlag = 0;
        while (!feof($file_handle)) {
            if($titleFlag > 1) {
                $landingContent[] = fgetcsv($file_handle, 0, $array['delimiter']);
            }
            $titleFlag++;
        }
        fclose($file_handle);
        return array_filter($landingContent);
    }

    public function landingAction() {
        $csvFile = resource_path('csv/landing.csv');
        $landingContent = $this->readCSV($csvFile,array('delimiter' => ';'));
        /*Sno;Category;Title;Short_paragraph;Main_image_name;Sub_image_name;Created_date;Author;Post_page_link*/
        foreach($landingContent as $key => $arrContents) {
            if($key>0) {
                $posteddate = trim($arrContents[6]);
                $lowercaseCategory = trim(strtolower($arrContents[1]));
                $arrCategories[$arrContents[1]] = $arrContents[1];
                $arrPostsContents[$posteddate][$arrContents[2]] = $arrContents[3];
                $arrPostPageLink[$posteddate][$arrContents[2]] = $arrContents[8];
                $arrPostsContentsMainImg[$posteddate][$arrContents[2]] = $arrContents[4];
                $arrPostsContentsAuthor[$posteddate][$arrContents[2]] = $arrContents[7];
                $arrPostsContentsCategoryBaseContents[$lowercaseCategory][$posteddate][$arrContents[2]] = $arrContents[3];
                $arrPostsContentsCategoryBaseImages[$lowercaseCategory][$posteddate][$arrContents[2]] = $arrContents[4];
            }
        }
        
        $arrCategoriesCount = array_count_values($arrCategories);
        $arrLandingContents["categories_and_count"] = $arrCategoriesCount;
        /*  Sort based on old post as first and latest post as last.
        $arrLandingContents["landing_posts"] = collect($arrPostsContents)->sortBy('field1')->reverse()->toArray();
        The Keys are landing_posts_main_img and author
        */
        $arrLandingContents["landing_posts"] = $arrPostsContents;
        $arrLandingContents["landing_posts_main_img"] = $arrPostsContentsMainImg;
        $arrLandingContents["author"] = $arrPostsContentsAuthor;
        $arrLandingContents["category_based_contents"] = $arrPostsContentsCategoryBaseContents;
        $arrLandingContents["category_based_images"] = $arrPostsContentsCategoryBaseImages;
        $arrLandingContents["postpageLink"] = $arrPostPageLink;
        
        return view('landing', ['LandingContent' => $arrLandingContents]);
    }

    public function imageuploadAction(Request $request) {
        if($request->method() == "GET") {
            return view('imageupload');
        }
        if($request->method() == "POST") {            
            if($request->hasFile('input_img')) {                
                $image = $request->file('input_img');                
                $name = $request->file('input_img')->getClientOriginalName();                
                $destinationPath = public_path('/img/galeryImages/');
                $image->move($destinationPath, $name);                
                return back()->with('success','Image Upload successfully');
            }            
        }
    }

    public function adminAction() {
        return view('admin');
    }

    public function randomlinkAction() {
        $today = date('YmdHis');        
        echo "<pre></b>$today</b></pre>";
        exit;
    }

    public function postpageAction($request) { 
        $csvFile = resource_path('csv/postpage.csv');
        $postpageContent = $this->readCSV($csvFile,array('delimiter' => ';'));        
        foreach($postpageContent as $key => $arrValues) {
            if($key == 0)
                $arrTitles = $arrValues;
            if(($key > 0) && (in_array($request, $arrValues))) {
                $arrCombinedResult = array_combine($arrTitles, $arrValues);
                // echo "<pre>"; print_r($arrCombinedResult);exit;
                return view('postpage', ['PostPageContent' => $arrCombinedResult]);
            }
        }

        
    }

    public function adminuploadAction(Request $request) {
        $postRequest = $request->all();
        print_r($postRequest);exit;
    }
}