<?php

route()->group("/class",function(){
    route()->get("/list","ClassController@listClass");
    route()->get("/info","ClassController@getClass");
    route()->get("/try","ClassController@getClassTry");
    route()->get("/chapter","ClassController@getClassChapter");
});

route()->group("/banner",function(){
    route()->get("/list","BannerController@listBanner");
});
