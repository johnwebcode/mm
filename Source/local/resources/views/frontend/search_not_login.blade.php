<?php
 //$data1 = $results['login'];
    $sess = \Session::get('username');
    $user_prf=\ DB::table('user_profile')->get();
    $get_education=\ DB::table('education')->get();
    $get_rel=\ DB::table('religion')->get();
  $get_caste=\ DB::table('caste')->get();
  $get_stat=\ DB::table('state')->get();
  $get_dist=\ DB::table('district')->get();
  $get_occupation=\ DB::table('occupation')->get();
   ?>

@include('include.frontpage_headers')
 <meta name="_token" content="{!! csrf_token() !!}"/>


    <div class="search-gap">
    </div>
    <div class="search-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
           <div class="search-div">
              <div class="search-left">
                <div class="search-left-wrap">
                   <form class="filter_form">
                    <?php

 $settings_permission=\DB::table('settings')
                       ->get();
                foreach($settings_permission as $permission)
                {
                 $s_religion=$permission->religion;
                 $s_education=$permission->education;
                 $s_occupation=$permission->occupation;
                 $s_place=$permission->place;
                  $s_age=$permission->age;


                }   
     if($s_religion==1)   
     {


?>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title"><div class="expnd-text">RELIGION</div>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <div class="expnd-box">+</div>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                  <ul class="main-op">
    <?php 
    $r=30000;;
foreach($get_rel as $religion)
{
  $r++;
  $r_id=$religion->religion_id;
?>

                    <li>

                    <input id="<?php echo $r;?>" type="checkbox" class="search-check search_filter" name="religion[]" value="<?php echo $religion->religion_id; ?>">
                    <label for="<?php echo $r;?>" class="search-check searchlbl
                      "><?php echo $religion->religion; ?></label>
                         
                       <ul class="sub-op">
                     <?php 
                     $s=50000;
                          foreach($get_caste as $caste)
                          {
                            $s++;
                            $rel_id=$caste->religion_id;
                            if($r_id==$rel_id)
                            {
                          ?>
                     
                        <li>
                         
                          
                          <input id="<?php echo $s;?>" type="checkbox" class="search-check search_filter" name="caste[]" value="<?php echo $caste->caste_id; ?>">
                          <label for="<?php echo $s;?>" class="search-check searchlbl"><?php echo $caste->caste; ?></label>
                          
                            

                          
                        </li>
                       <?php 
                        }
                      }
                             ?>
                             <li>
                               <input id="121a" type="checkbox" class="search-check search_filter" name="other_caste[]" value="other_caste">
                          <label for="121a" class="search-check searchlbl">Other</label>
                          
                             </li>
                      
                        
                      </ul>
                      
                            
                            
                            

                    </li>
                     <?php } ?>
                 
                     <li>
                         
                           <input id="2a2" type="checkbox" class="search-check search_filter" name="other_religion[]" value="other_religion"  >
                          <label for="2a2" class="search-check searchlbl">Other</label>

                         
                        </li>
                    
                  </ul>
                      </div>
                    </div>
                  </div>
                  <?php
   }
    if($s_place==1)   
     {
   ?>
                  
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title"><div class="expnd-text">PLACE</div>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          <div class="expnd-box">+</div>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                  <ul class="main-op">
                     <?php 
              $t=70000;       
foreach($get_stat as $state)
{
  $t++;
  $st_id=$state->state_id;
?>
                    <li>
                    <input id="<?php echo $t;?>" type="checkbox" class="search-check search_filter" name="state[]" value="<?php echo $state->state_id; ?>">
                    <label for="<?php echo $t;?>" class="search-check searchlbl"><?php echo $state->state; ?></label>
                      <ul class="sub-op">
     <?php 
     $u=90000;
foreach($get_dist as $district)
{
  $u++;
  $dst_id=$district->state_id;
  if($st_id==$dst_id)
  {
?>
                        <li>
                          <input id="<?php echo $u;?>" type="checkbox" class="search-check search_filter" name="district[]" value="<?php echo $district->district_id; ?>">
                          <label for="<?php echo $u;?>" class="search-check searchlbl
                            "><?php echo $district->district; ?></label>
                        </li>
                          <?php }}?>
                      </ul>
                    </li>
                    

                    
                   <?php }?>      
                  </ul>
                      </div>
                    </div>
                  </div>
                   <?php
    }
     if($s_age==1)   
     {
      ?>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title"><div class="expnd-text">AGE</div>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          <div class="expnd-box">+</div>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                  <ul class="main-op">
                    <li>
                    <input id="500" type="checkbox" class="search-check search_filter" name="dob[]" value="18">
                    <label for="500" class="search-check searchlbl">18-23</label>
                    </li>
                    <li>
                    <input id="501" type="checkbox" class="search-check search_filter" name="dob[]" value="24" >
                    <label for="501" class="search-check searchlbl">24-29</label>
                    </li>
                    <li>
                    <input id="503" type="checkbox" class="search-check search_filter" name="dob[]" value="30">
                    <label for="503" class="search-check searchlbl">30-35</label>
                    </li>
                    <li>
                    <input id="504" type="checkbox" class="search-check search_filter" name="dob[]" value="36">
                    <label for="504" class="search-check searchlbl">36-41</label>
                    </li>
                   
                    
                  </ul>
                      </div>
                    </div>
                  </div>
                   <?php
   }
    if($s_education==1)   
     {
   ?>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                      <h4 class="panel-title"><div class="expnd-text">EDUCATION</div>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                          <div class="expnd-box">+</div>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
                      <div class="panel-body">
                  <ul class="main-op">
                      <?php
          $e=100000;
        foreach($get_education as $education)
        {
          $e++;
        ?>
                    <li>
                    <input id="<?php echo $e;?>" type="checkbox" class="search-check search_filter"  name="education[]" value="<?php echo $education->education_id; ?>">
                    <label for="<?php echo $e;?>" class="search-check searchlbl"><?php echo $education->education; ?></label>
                    </li>
                   
<?php }
?>
 
                    
                  </ul>
                      </div>
                    </div>
                  </div>
                   <?php
    }
     if($s_occupation==1)   
     {
    ?>
                    <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                      <h4 class="panel-title"><div class="expnd-text">OCCUPATION</div>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                          <div class="expnd-box">+</div>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive">
                      <div class="panel-body">
                  <ul class="main-op">
        <?php
        $w=120000;
foreach($get_occupation as $occu)
{
  $w++;
?>

                    <li>
                    <input id="<?php echo $w;?>" type="checkbox" class="search-check search_filter"  name="occupation[]" value="<?php echo $occu->occupation_id; ?>">
                    <label for="<?php echo $w;?>" class="search-check searchlbl"><?php echo $occu->occupation; ?></label>
                    </li>
                   
<?php }
?>
 
                    
                  </ul>
                      </div>
                    </div>
                  </div>
                    <?php
   }
     ?>
     
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="search-div">
              <div class="row search-results">
                 <?php
   $data = $results['users'];
   
  if( !empty($data) ) 
                     {
     foreach($data as $user)
     {
    $dob=$user->dob;
    $birthdate = new DateTime($dob);
    $today   = new DateTime('today');
    $age = $birthdate->diff($today)->y;
     $id=$user->user_id;
      $encrypted_id = base64_encode($id);
       

 
      
       ?>

                <div class="col-md-4">
                  <div class="prof-wrap">
                    <div class="prof-img1">
                       <?php if(empty($user->path))
            {?>
                      <a href='{{URL::to('user/not-login-profile-view')}}/{{$id}}'>  <img style="width:100%;height:240px;" src="{{asset('assets/images/default_profile.jpg')}}"></a>
                        <?php } else
            {
              ?>
             <a href='{{URL::to('user/not-login-profile-view')}}/{{$id}}'>  <img style="width:100%;height:240px;" src="{{asset($user->path)}}"/></a>
              <?php } ?>
                    </div>
                    <div class="prof-cv">
                      <ul class="child">
                        <li>Name</li>
                        <li>:&nbsp;&nbsp;<?php echo $user->name;?></li>
                      </ul>
                      <ul class="child">
                        <li>Age</li>
                        <li>:&nbsp;&nbsp;<?php echo $age;?></li>
                      </ul>
                      <ul class="child">
                        <li>Religion</li>
                        <li>:&nbsp;&nbsp;<?php if(empty($user->religion)){echo $user->other_religion;}else {
                          echo $user->religion;
                        }?>-<?php if(empty($user->caste)){echo $user->other_caste;}else {
                          echo $user->caste;
                        }?></li>
                      </ul>
                      <ul class="child">
                        <li>Place</li>
                        <li>:&nbsp;&nbsp;<?php echo $user->district;?>,<?php echo $user->state;?></li>
                      </ul>
                    </div>
                     <?php
             $user_id=$user->user_id;
             
             
                        $interested= \DB::table('interests')
                     ->where('sender_name',$sess)
                     ->where('interested_member',$user_id)->get();
            $count= count($interested); 
            
             $button_text = 'INTEREST';
           if($count==1)
           {
             $button_text = 'INTERESTED';
           }
           ?>
                    <input type="button" intrst_id="<?php echo $user->user_id;?>" value="<?php echo $button_text; ?>" class="<?php if($user->gender=="male")
                {echo "butn-interest-male";}
             else {echo "butn-interest-female";}?> <?php if($button_text=="INTERESTED")
                {echo "intrstd_clr";}?> interest intstd<?php echo $user->user_id;?> ">
                 
 

                  </div>
                </div>
                 <?php
                       }
             }
             
                    else
                  {
            ?>
             
                    Sorry! No Results Found For Your Request.
                   
                   
                
           <?php
     }
     ?>
                
              </div>
                <div class="loader_cls"></div>    
            
            </div>
          </div>
        </div>



      </div>
    </div>
    

         <!-- Footer-->
      @include('include.footer')

    </div>
     
      <script src="{{asset('assets/js/bootstrap.js')}}"></script>
      <script src="{{asset('assets/js/ie10-viewport-bug-workaround.js')}}"></script>
     <script type="text/javascript" src="{{asset('assets/js/chat/chat.js')}}"></script>
       <script type="text/javascript" src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
      <script>
    $('.main-op').slimscroll({
        size: '5px',
    height:'200px',
    distance : '5px'

      });

    /*$('#main_container').slimscroll({
        size: '5px',
    min-height:'200px',
    distance : '5px'

      });*/


    </script>
      <script type="text/javascript">
         $(function() {
          $("#slider").blissSlider({
            auto: 1,
                  transitionTime: 500,
                  timeBetweenSlides: 4000
          });
         });


     


      </script>


      <script type="text/javascript">

          $(function(){
      var $ppc = $('.progress-pie-chart'),
        percent = parseInt($ppc.data('percent')),
        deg = 360*percent/100;
      if (percent > 50) {
        $ppc.addClass('gt-50');
      }
      $('.ppc-progress-fill').css('transform','rotate('+ deg +'deg)');
      $('.ppc-percents span').html(percent+'%');
    });


      </script>


      <script type="text/javascript">
    $(document).ready(function(){

       $(window).scroll(function(){

          var e= $(window).scrollTop();

          if ( e > 50){

             $(".nav_main").addClass("short_menu")

          }else{
              $(".nav_main").removeClass("short_menu")

          }
      });

    });




      </script>
   <script>


$(document).ready(function(){
     $(".loader_cls").hide(); 
             
     $(".search_filter").click(function(){
              $(".loader_cls").show(); 
      
             var value =$(".filter_form").serialize() ;
      
      $.ajax({
      type:'POST',
      url: "{{ url('user/not-login-userfilter')}}",
      data: value,
      success:function (results){
                 $(".loader_cls").hide(); 
        $('.search-results').html(results);
    
          },
          error:function (results){
        
          }
        });
    });
});
        /*ajax end here*/
$.ajaxSetup({
   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
</script>

   </body>
</html>
