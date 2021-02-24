<?php
session_start();
if(isset($_SESSION['uname'])){
}
else {
    echo "<script>location.href='index.php'</script>";
}
?>
<html>
 <head>
  <title>SIM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Launch Simulation">
  <meta name="Mohammed Zakaria" content="">
  <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'> </script>
  <link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'></link>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="jquery.min.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <link rel='stylesheet' type='text/css' href='x3dom.css'>
   <link rel='stylesheet' type='text/css' href='media/css/examples.css'>
  <link rel='stylesheet' type='text/css' href='media/font/orbitron.css'>
  <script>document.write('<script src="script.js?dev=' + Math.floor(Math.random() * 100) + '"\><\/script>');</script>
   <style>
  body{
   background-image: url("./backzip.jpg");
   background-repeat: no-repeat;
   background-size: 1366px 636px;
   }
   .swal-overlay {
      background-color: rgba(255, 10, 10, 0.45);
}
   .swal-modal {
      background-color: rgba(63,255,106,0.89);
      border: 3px solid white;
      color: #fff;
}
.quiz {
    padding:10px;
    background-color: #e00;
    color: #fff;
    font-size: 20px;
    border-radius:5px;
}
.feedform {
    padding:10px;
    background-color: #f2f2f2;
    color: #000000;
    font-size: 18px;
    border-radius:2px;
}
.but{
    border:none;
    margin-top: 10px;
    padding: 4px 8px;
    border-radius: 5px;
    background-color: #f00;
    color: #fff;
    font-size: 20px;
}
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.ops{
   color: #708090;
}

</style>
<script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
 </head>
 <body>
  <div id="ex1" style="display: none;">
  <form id="quiz1" name="quiz1">
  <div class="quiz">
  <h4>What is the maximum payload that the zip can carry?</h4>
  <input type="radio" id="a1" name="q1" value="1">3.30kg<br>
  <input type="radio" id="a2" name="q1" value="2">1.75kg<br>
  <input type="radio" id="a3" name="q1" value="3">1.00kg<br>
  <input type="radio" id="a4" name="q1" value="4">2.90kg<br>
  </div>
   <button type="button" class="but" onclick="sub1();"><a rel="modal:close">Submit</a></button>
</form>
</div>
 <div id="ex2" style="display: none;">
  <form id="quiz2" name="quiz2">
  <div class="quiz">
  <h4>How many checks does the loader perform on a package?</h4>
  <input type="radio" id="b1" name="q2" value="1">One<br>
  <input type="radio" id="b2" name="q2" value="2">Two<br>
  <input type="radio" id="b3" name="q2" value="3">Three<br>
  <input type="radio" id="b4" name="q2" value="4">Four<br>
  </div>
  <button type="button" class="but" onclick="sub2();"><a rel="modal:close">Submit</a></button>
</form>
</div>
<div id="ex3" style="display: none;">
  <form id="quiz3" name="quiz3">
  <div class="quiz">
  <h4>Which of these represents how to carry sparrow?</h4>
  <input type="radio" id="b1" name="q3" value="1">One hand on the hatch foam and another on the tail boom<br>
  <input type="radio" id="b2" name="q3" value="2">One hand on the launch ribs and another on the tail boom<br>
  <input type="radio" id="b3" name="q3" value="3">One hand on the front handle and another on the tail fins<br>
  <input type="radio" id="b4" name="q3" value="4">One hand on the front handle and another on the tail boom<br>
  </div>
   <button type="button" class="but" onclick="sub3();"><a rel="modal:close">Submit</a></button>
</form>
</div>
<div id="ex4" style="display: none;">
  <form id="quiz4" name="quiz4">
  <div class="quiz">
  <h4>What is the function of the sparrow wing?</h4>
  <input type="radio" id="b1" name="q4" value="1">It provides lift and controls altitude of the zip through control surfaces<br>
  <input type="radio" id="b2" name="q4" value="2">It provides thrust and controls latitude of the zip through control surfaces<br>
  <input type="radio" id="b3" name="q4" value="3">It provides aerodynamic drag and controls altitude of the zip through control surfaces<br>
  <input type="radio" id="b4" name="q4" value="4">It provides weight and controls mass of the zip through control surfaces<br>
  </div>
   <button type="button" class="but" onclick="sub4();"><a rel="modal:close">Submit</a></button>
</form>
</div>
<div id="ex5" style="display: none;">
  <form id="quiz5" name="quiz5">
  <div class="quiz">
  <h4>All the following are functions of the sparrow battery except?</h4>
  <input type="radio" id="b1" name="q5" value="1">It powers the zip<br>
  <input type="radio" id="b2" name="q5" value="2">It stores operating instructions<br>
  <input type="radio" id="b3" name="q5" value="3">It houses the LOS antenna<br>
  <input type="radio" id="b4" name="q5" value="4">It saves logs from flight<br>
  </div>
   <button type="button" class="but" onclick="sub5();"><a rel="modal:close">Submit</a></button>
</form>
</div>
<div id="ex6" style="display: none;">
  <form id="quiz6" name="quiz6">
  <div class="quiz">
  <h4>The nose cone insulates and protects the battery?</h4>
  <input type="radio" id="b1" name="q6" value="1">true<br>
  <input type="radio" id="b2" name="q6" value="2">false<br>
  </div>
  <button type="button" class="but" onclick="sub6();"><a rel="modal:close">Submit</a></button>
</form>
</div>
<div id="ex7" style="display: none;">
  <form id="quiz7" name="quiz7">
  <div class="quiz">
  <h4>Which of the following is/are true about the first checking of the propulsion system?</h4>
  <p>I. Ensure the motor pod is securely fastened to the pylon</p>
  <p>II. Ensure the pylon is securely attached to the tailboom</p>
  <p>III. Prop should be clear of any slices or cuts</p>
  <P>IV. It is performed by the launch operator</p>
  <p>V. It is performed by the loader</p>
  <input type="radio" id="b1" name="q7" value="1">I, III, and V<br>
  <input type="radio" id="b2" name="q7" value="2">I, II, III and V<br>
  <input type="radio" id="b3" name="q7" value="3">II, III, IV, V<br>
  <input type="radio" id="b4" name="q7" value="4">All the above<br>
  </div>
  <button type="button" class="but" onclick="sub7();"><a rel="modal:close">Submit</a></button>
</form>
</div>
<div id="ex8" style="display: none;">
  <form id="quiz8" name="quiz8">
  <div class="quiz">
  <h4>The second checking of the propulsion system is done by the loader?</h4>
  <input type="radio" id="b1" name="q8" value="1">true<br>
  <input type="radio" id="b2" name="q8" value="2">false<br>
  </div>
  <button type="button" class="but" onclick="sub8();"><a rel="modal:close">Submit</a></button>
</form>
</div>
<div id="ex9" style="display: none;">
  <form id="quiz9" name="quiz9">
  <div class="quiz">
  <h4>Who does the walkaround checks?</h4>
  <input type="radio" id="b1" name="q9" value="1">Loader<br>
  <input type="radio" id="b2" name="q9" value="2">Launch Operator<br>
  </div>
  <button type="button" class="but" onclick="sub9();"><a rel="modal:close">Submit</a></button>
</form>
</div>
<div id="ex10" style="display: none;">
  <form id="quiz10" name="quiz10">
  <div class="quiz">
  <h4>All the following are checked during walkaround checks except?</h4>
  <input type="radio" id="b1" name="q10" value="1">Voltage: between 680V - 700V<br>
  <input type="radio" id="b2" name="q10" value="2">Nose: flush and secure<br>
  <input type="radio" id="b3" name="q10" value="3">Launch ribs: seated and secure<br>
  <input type="radio" id="b4" name="q10" value="4">Launcher: inclined and facing south<br>
  <input type="radio" id="b5" name="q10" value="5">Tailhook: aligned<br>
  </div>
  <button type="button" class="but" onclick="sub10();"><a rel="modal:close">Submit</a></button>
</form>
</div>
<div id="ex11" style="display: none;">
  <form id="quiz11" name="quiz11">
  <div class="quiz">
  <h4>Why do we do control surface checks?</h4>
  <input type="radio" id="b1" name="q11" value="1">To reduce aerodynamic drag<br>
  <input type="radio" id="b2" name="q11" value="2">To ensure control surfaces can deflect to the appropriate angles<br>
  <input type="radio" id="b3" name="q11" value="3">To ensure even distribution of weight across the zip<br>
  <input type="radio" id="b4" name="q11" value="4">To ensure the zip is not loaded beyond limit<br>
  </div>
  <button type="button" class="but" onclick="sub11();"><a rel="modal:close">Submit</a></button>
</form>
</div>
<div id="ex12" style="display: none;">
  <form id="quiz12" name="quiz12">
  <div class="quiz">
  <h4>All the following are checked during critical checks except?</h4>
  <input type="radio" id="b1" name="q12" value="1">Current<br>
  <input type="radio" id="b2" name="q12" value="2">Voltage<br>
  <input type="radio" id="b3" name="q12" value="3">Nose<br>
  <input type="radio" id="b4" name="q12" value="4">Launch ribs<br>
  <input type="radio" id="b4" name="q12" value="5">Tailfins<br>
  </div>
  <button type="button" class="but" onclick="sub12();"><a rel="modal:close">Submit</a></button>
</form>
</div>
<div id="feedback" style="display: none;">
  <form id="feed" name="feeds">
  <div class="feedform">
  <h3 style="color:#8B0000; font-weight: bolder; padding: 10x 5px;">Feedback Form</h3>
  <div class="ops">
  <label for="name" style="color:#48D1CC; font-weight: bolder;padding: 10x 5px;">Name (Optional)</label>
  <input type="text" id="name" name="name" style="width:320px; height:26px; border-radius:5px;"><br>
  <label for="role" style="color:#48D1CC; font-weight: bolder;padding: 10x 5px;">Role</label><br>
  <input type="radio" id="flitop" name="role" value="1">Flight Operator<br>
  <input type="radio" id="fulop" name="role" value="2">Fulfillment Operator<br>
  <label for="nest" style="color:#48D1CC; font-weight: bolder;padding: 10x 5px;">Nest</label><br>
  <input type="radio" name="n1" value="1">RW-1<br>
  <input type="radio" name="n1" value="2">RW-2<br>
  <input type="radio" name="n1" value="1">GH-1<br>
  <input type="radio" name="n1" value="2">GH-2<br>
  <input type="radio" name="n1" value="1">GH-3<br>
  <input type="radio" name="n1" value="2">GH-4<br>
  <label for="comms" style="color:#48D1CC; font-weight: bolder; padding: 10x 5px;">Comments</label><br>
  <textarea id="comments" name="com" rows="4" cols="50">
  </textarea>
  </div>
  </div>
  <button type="button" class="but" style="background-color:#00FF7F;" onclick="feed();"><a rel="modal:close">Submit</a></button>
</form>
</div>

<div id="help" style="display: none;">
<div id="accordion">
  <h3>Select</h3>
  <div>
    <p>
    Click on this button to take you to the drop mech viewpoint. Click on drop mech to open it.
    </p>
  </div>
  <h3>Package</h3>
  <div>
    <p>
    Click on this button to take you to the package viewpoint. Click on package to move it to body.
    </p>
  </div>
  <h3>Body</h3>
  <div>
    <p>
    Click on this button to take you to the body viewpoint. Click on tailfin or tailboom to move body to carriage.
    </p>
  </div>
  <h3>Props</h3>
  <div>
    <p>
    Click on this button to take you to the propulsion system viewpoint. Click on motor pod to check propulsion system.
    </p>
  </div>
  <h3>Wing</h3>
  <div>
    <p>
    Click on this button to take you to the wing viewpoint. Click on wing to insert it on the selected body.
    </p>
  </div>
  <h3>Battery</h3>
  <div>
    <p>
    Click on this button to take you to the battery viewpoint. Click on battery to insert it on the selected body.
    </p>
  </div>
  <h3>Nose</h3>
  <div>
    <p>
Click on this button to take you to the nose cone viewpoint. Click on nose cone to insert it on the selected body.
    </p>
  </div>
  <h3>Checks</h3>
  <div>
    <p>
    Click on this button to do walkaround checks, control surface check and critical check.
    </p>
  </div>
</div>
<button type="button" class="but" style="background-color:#ff0000;"><a rel="modal:close">Close</a></button>
</div>

 <x3d width="1358px", height="586px" showStat="false">
   <scene>
       <navigationInfo type='"" "any"' id="navType"></navigationInfo>
     <!--NEST-->
    <Sound>
      <AudioClip loop='true' id="mute" enabled="true" pitch='1' url="https://upload.wikimedia.org/wikipedia/commons/8/88/Jungle_audio.wav"/>
    </Sound>
    <Sound>
      <AudioClip loop='false' id="ready" enabled="false" pitch='1' url="https://upload.wikimedia.org/wikipedia/commons/a/a9/Ready_for_launch.wav"/>
    </Sound>
    <Sound>
      <AudioClip loop='false' id="qs" enabled="false" pitch='1' url="https://upload.wikimedia.org/wikipedia/commons/e/e2/Questions_for_simulator.wav"/>
    </Sound>
    <!--PACKAGE PICKUP POINT-->
    <transform translation="-17 2 6">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.2 8.5 24"></box>
     </shape>
    </transform>
    <transform translation="-12.5 2 -6">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="9.2 8.5 0.2"></box>
     </shape>
    </transform>
    <transform translation="4 0 0" rotation="0 0 -1 0.5">
    <transform translation="-17 0 6" rotation="0 1 0 1.5709">
     <shape>
      <appearance>
      <ImageTexture  url="https://upload.wikimedia.org/wikipedia/commons/8/85/Roofing_sheet_for_nest.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="26 0.2 8.5"></box>
     </shape>
    </transform>
  </transform>
  <transform translation="8.5 9.5 0" rotation="0 0 1 0.88">
    <transform translation="-17 18 6" rotation="0 1 0 1.5709">
     <shape>
      <appearance>
      <ImageTexture  url="https://upload.wikimedia.org/wikipedia/commons/8/85/Roofing_sheet_for_nest.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="26 0.2 5.5"></box>
     </shape>
    </transform>
  </transform>
    <transform translation="-12.5 2 18">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="9.2 8.5 0.2"></box>
     </shape>
    </transform>
    <transform translation="-8 -1 6">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.2 2.5 24"></box>
     </shape>
    </transform>
    <transform translation="-8 4.5 6">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.2 3.5 24"></box>
     </shape>
    </transform>
    <!--DOOR-->
    <transform translation="-8 0.35 14">
     <shape onclick="mod1();">
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="0.3 5 2"></box>
     </shape>
    </transform>
    <transform translation="-8 0.35 -2">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="0.3 5 2"></box>
     </shape>
    </transform>
    <transform translation="-8 1 13">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.2 3.5 10"></box>
     </shape>
    </transform>
    <transform translation="-8 1 -1.0">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.2 3.5 10"></box>
     </shape>
    </transform>
    <!--WAREHOUSE LABEL-->
    <transform translation="-7.8 3.15 6" rotation="0 1 0 1.5709">
    <shape>
      <appearance>
          <material ambientIntensity='0.0933' diffuseColor='1 0 0' shininess='0.51'></material>
        </appearance>
        <text string='Fulfillment Warehouse' solid='false'>
        <fontstyle size="0.5"></fontstyle>
        </text>
      </shape>
    </transform>
    <!--WINDOW FRAMES-->
    <transform translation="-8 1.5 8">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="0.25 2.5 0.2"></box>
     </shape>
    </transform>
    <transform translation="-8 1.5 4">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="0.25 2.5 0.2"></box>
     </shape>
    </transform>
    <transform translation="-8 2.8 6">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="0.25 0.2 4"></box>
     </shape>
    </transform>
    <transform translation="-8 0.2 6">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="0.25 0.2 4"></box>
     </shape>
    </transform>
    <transform translation="-8 1.5 6">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="0.25 2.5 0.2"></box>
     </shape>
    </transform>
    <transform translation="-8 1.5 6">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1" transparency="0.8"></material>
      </appearance>
      <box size="0.05 2.5 4"></box>
     </shape>
    </transform>
    <transform translation="-7.2 0 6">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="1.6 0.2 6"></box>
     </shape>
    </transform>

    <!--ZIP STAND-->
    <group DEF="zipstand">
    <transform translation="0 -0.5 0">
    <transform translation="0.25 -0.6 12">
     <shape>
      <appearance>
       <material diffuseColor="0.8 0.8 0.8"></material>
      </appearance>
      <box size="0.08 2 0.08"></box>
     </shape>
    </transform>
    <transform translation="0.75 -0.6 12">
     <shape>
      <appearance>
       <material diffuseColor="0.8 0.8 0.8"></material>
      </appearance>
      <box size="0.08 2 0.08"></box>
     </shape>
    </transform>
    <transform translation="0.5 -0.6 12">
     <shape>
      <appearance>
       <material diffuseColor="0.8 0.8 0.8"></material>
      </appearance>
      <box size="0.5 0.08 0.08"></box>
     </shape>
    </transform>
    <transform translation="0.25 -0.6 11.8">
     <shape>
      <appearance>
       <material diffuseColor="0.8 0.8 0.8"></material>
      </appearance>
      <box size="0.08 0.08 0.45"></box>
     </shape>
    </transform>
     <transform translation="0.75 -0.6 11.8">
     <shape>
      <appearance>
       <material diffuseColor="0.8 0.8 0.8"></material>
      </appearance>
      <box size="0.08 0.08 0.45"></box>
     </shape>
    </transform>
    <transform translation="0.5 0.34 12">
     <shape>
      <appearance>
       <material diffuseColor="0.8 0.8 0.8"></material>
      </appearance>
      <box size="0.5 0.08 0.08"></box>
     </shape>
    </transform>
    <transform translation="0.5 -0.59 11.8">
     <shape>
      <appearance>
       <material diffuseColor="0.3 0.3 0.3"></material>
      </appearance>
      <box size="0.5 0.05 0.4"></box>
     </shape>
    </transform>
    <transform translation="0.5 -0.59 11.6" rotation="0 0 1 1.57079">
     <shape>
      <appearance>
       <material diffuseColor="0.3 0.3 0.3"></material>
      </appearance>
      <Cylinder height="0.55" radius="0.05"></Cylinder>
     </shape>
    </transform>
    <transform translation="0.25 -1.6 12">
     <shape>
      <appearance>
       <material diffuseColor="0.8 0.8 0.8"></material>
      </appearance>
      <box size="0.08 0.08 0.7"></box>
     </shape>
    </transform>
     <transform translation="0.75 -1.6 12">
     <shape>
      <appearance>
       <material diffuseColor="0.8 0.8 0.8"></material>
      </appearance>
      <box size="0.08 0.08 0.7"></box>
     </shape>
    </transform>
    </transform>
    </group>
    <Transform translation='0.8 0 0'>
     <Shape USE='zipstand'/>
    </Transform>
    <Transform translation='-0.8 0 0'>
     <Shape USE='zipstand'/>
    </Transform>
    <Transform translation='1.6 0 0'>
     <Shape USE='zipstand'/>
    </Transform>

    <!--ZIP ON STAND 1-->
    <transform DEF="ZIPA1">
    <!--BOX-->
    <group>
    <transform DEF="movePack" translation="-7.2 0.25 7">
     <shape onclick="package();">
      <appearance>
      <ImageTexture  url="https://upload.wikimedia.org/wikipedia/commons/7/7c/Package_design.png">
      <ImageTexture/>      
      </appearance>
      <box size="0.4 0.18 0.4"></box>
     </shape>
    </transform>
    <touchSensor id="pack1" enabled="false"/>
    <Sound>
    <AudioClip id="s1" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/9/91/Sound4.wav"/>
    </Sound>
    </group>
    <transform DEF="ZIP1">
    <transform DEF="ZIP11" center="-0.3 -0.5 12.3">
    <transform rotation="0 1 0 3.142">
    <transform translation="0.3 0.8 -13.3" rotation="1 0 0 -1.86">
    <!--FUSE FOAM-->
    <transform translation="0 -0.969 -1.47" rotation="1 0 0 0.2">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.001 0.8"></box>
     </shape>
    </transform>
    <transform translation="0 -1.08 -1.41" rotation="1 0 0 -0.089">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.001 0.67"></box>
     </shape>
    </transform>
    
    <transform translation="0 -1.08 -1.4" rotation="1 0 0 1.48">
    <shape>
      <appearance>
          <material ambientIntensity='0.0933' diffuseColor='0 0 0' shininess='0.51'></material>
        </appearance>
        <text string='100' solid='false'>
        <fontstyle size="0.2"></fontstyle>
        </text>
      </shape>
    </transform>
    
    <transform translation="0 -1 -1.88">
     <shape>
      <appearance>
      <ImageTexture  url="https://upload.wikimedia.org/wikipedia/commons/3/30/Zipline_1.png">      
      </appearance>
      <box size="0.5001 0.14 0.42"></box>
     </shape>
    </transform>
    <transform translation="0 -0.91 -2">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.02 0.38"></box>
     </shape>
    </transform>
    <transform translation="0 -1.01 -2.15">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.2 0.07"></box>
     </shape>
    </transform>
    <!--LEFT AND RIGHT FUSE FOAMS-->
    <transform translation="0.235 -1.01 -1.984">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.03 0.2 0.27"></box>
     </shape>
    </transform>
    
    <transform translation="-0.235 -1.01 -1.984">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.03 0.2 0.27"></box>
     </shape>
    </transform>
    
    <!--TAIL BOOM-->
    <group onclick="loadbody1();">
    <transform translation="0 -1.05 -0.7" rotation="1 0 0 1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height="1" radius="0.018"></cylinder>
     </shape>
    </transform>
    
    <!--TAIL FINs-->
     
      <transform rotation='0 0 -1 0.8' translation="0.88 -0.34 -0.01"> 
      <transform scale="0.03 0.06 0.06" translation="-0.1 -0.94 -0.26" rotation="0 1 0 3.142">
        <transform rotation="1 0 0 1.5708" scale='-0.109998 -1 -2.77423'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material diffuseColor="1 1 1"></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1' coordIndex='4 6 11 13 -1 3 2 6 7 -1 7 6 4 5 -1 5 1 3 7 -1 1 0 2 3 -1 5 4 0 1 -1 2 0 8 9 -1 12 13 11 10 -1 2 0 12 10 -1 0 4 13 12 -1 6 2 10 11 -1'>
                  <coordinate DEF='coords_ME_Cube' point='1 1 1 1 0.941509 -1 1 -0.241213 1 1 -2.33791 -1 -1 1 1 -1 0.941509 -1 -1 -0.241213 1 -1 -2.33791 -1 1 1 1 1 -0.241213 1 -4.06306 -0.241213 1.17399 -5.36475 -0.241213 1.17399 -4.06306 1 1.17399 -5.36475 1 1.17399'></coordinate>
                  <textureCoordinate point='0.625 0.25 0.625 0 0.625 0 0.625 0.25 0.375 0.75 0.625 0.75 0.625 1 0.375 1 0.375 0 0.625 0 0.625 0.25 0.375 0.25 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.375 0.5 0.625 0.5 0.625 0.75 0.375 0.75 0.375 0.25 0.625 0.25 0.625 0.5 0.375 0.5 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.625 0.25 0.625 0.25 0.625 0.5 0.625 1 0.625 0.75 0.625 0.75 0.625 1'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    </transform>
    <transform rotation='0 0 1 0.8' translation="-0.74 -0.2 -0.01"> 
      <transform scale="0.03 0.06 0.06" translation="-0.1 -0.94 -0.26" rotation="0 1 0 3.142">
     <transform DEF='Cube_TRANSFORM' rotation='1 0 0 1.5708' scale='-0.109998 -1 -2.77423'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material DEF='MA_Material' diffuseColor='1 1 1'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1' coordIndex='4 6 11 13 -1 3 2 6 7 -1 7 6 4 5 -1 5 1 3 7 -1 1 0 2 3 -1 5 4 0 1 -1 2 0 8 9 -1 12 13 11 10 -1 2 0 12 10 -1 0 4 13 12 -1 6 2 10 11 -1'>
                  <coordinate DEF='coords_ME_Cube' point='1 1 1 1 0.941509 -1 1 -0.241213 1 1 -2.33791 -1 -1 1 1 -1 0.941509 -1 -1 -0.241213 1 -1 -2.33791 -1 1 1 1 1 -0.241213 1 5.06442 -0.241213 1.17399 3.75747 -0.215517 1.17508 5.06442 1 1.17399 3.75747 1.0257 1.17508'></coordinate>
                  <textureCoordinate point='0.625 0.25 0.625 0 0.625 0 0.625 0.25 0.375 0.75 0.625 0.75 0.625 1 0.375 1 0.375 0 0.625 0 0.625 0.25 0.375 0.25 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.375 0.5 0.625 0.5 0.625 0.75 0.375 0.75 0.375 0.25 0.625 0.25 0.625 0.5 0.375 0.5 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.625 0.25 0.625 0.25 0.625 0.5 0.625 1 0.625 0.75 0.625 0.75 0.625 1'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    </transform>
    <Transform translation='0 0 0'>
     <Shape>
      <IndexedTriangleStripSet index='0 1 2' normalPerVertex='true' solid='false'>
       <Coordinate point='0.25 -1.05 -1.076   0.25 -1.12 -1.86   0.25 -0.89 -1.86'/>
      </IndexedTriangleStripSet>
     <Appearance>
      <Material diffuseColor='1 1 1'/>
     </Appearance>
     </Shape>
    </Transform>
    <Transform translation='0 0 0'>
     <Shape>
      <IndexedTriangleStripSet index='0 1 2' normalPerVertex='true' solid='false'>
       <Coordinate point='-0.25 -1.05 -1.076   -0.25 -1.12 -1.86   -0.25 -0.89 -1.86'/>
      </IndexedTriangleStripSet>
     <Appearance>
      <Material diffuseColor='1 1 1'/>
     </Appearance>
     </Shape>
    </Transform> 
    <touchSensor id="zip1" enabled="false"/>
    <Sound>
    <AudioClip id="s2" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/9/91/Sound4.wav"/>
    </Sound>
    <Sound>
    <AudioClip id="e2" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/7/7e/Error_message.wav"/>
    </Sound>
    <Sound>
    <AudioClip id="d2" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/6/6f/Doublesele.wav"/>
    </Sound>
  </group>
  <!--DROP MECHANISM-->
  <transform translation="0 -1.07 -1.944">
     <shape>
      <appearance>
       <material diffuseColor="0.02 0.02 0.02"></material>
      </appearance>
      <box size="0.48 0.03 0.4"></box>
     </shape>
    </transform>
    <group onclick="drop1();">
    <transform DEF="dr1" center="-0.125 0 0" translation="-0.125 -1.109 -1.944">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.25 0.003 0.42"></box>
     </shape>
    </transform>
    <transform DEF="dl1" center="0.125 0 0" translation="0.125 -1.109 -1.944">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.25 0.003 0.42"></box>
     </shape>
    </transform>
    <touchSensor id="mech1" enabled="true"/>
    </group>
    <!--PROPULSION SYSTEM-->
    <!--PYLON-->
        <transform scale='0.03 0.04 0.06' translation='0 -1.05 -1.15'>
        <transform DEF='Cube_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.084853 0.634655 1.98526'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material diffuseColor="1 1 1"></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 51 -1 52 53 54 55 -1' coordIndex='0 1 3 2 -1 2 3 7 6 -1 6 7 5 4 -1 4 5 1 0 -1 4 0 13 15 -1 5 7 10 11 -1 10 9 8 11 -1 3 1 8 9 -1 1 5 11 8 -1 7 3 9 10 -1 12 14 15 13 -1 2 6 14 12 -1 0 2 12 13 -1 6 4 15 14 -1'>
                  <coordinate DEF='coords_ME_Cube_001' point='-1 -1 0.972698 -1 -1 2.9727 -1 1 0.972698 -1 1 2.9727 1 -1 0.972698 1 -1 2.9727 1 1 0.972698 1 1 2.9727 -1 -2.9776 3.93558 -1 1 3.93558 1 1 3.93558 1 -2.9776 3.93558 -1 1 0.076012 -1 -2.78163 0.076012 1 1 0.076012 1 -2.78163 0.076012'></coordinate>
                  <textureCoordinate point='0.375 0 0.625 0 0.625 0.25 0.375 0.25 0.375 0.25 0.625 0.25 0.625 0.5 0.375 0.5 0.375 0.5 0.625 0.5 0.625 0.75 0.375 0.75 0.375 0.75 0.625 0.75 0.625 1 0.375 1 0.375 0.75 0.375 1 0.375 1 0.375 0.75 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.625 0.25 0.625 0 0.625 0 0.625 0.25 0.625 1 0.625 0.75 0.625 0.75 0.625 1 0.625 0.5 0.625 0.25 0.625 0.25 0.625 0.5 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.375 0.25 0.375 0.5 0.375 0.5 0.375 0.25 0.375 0 0.375 0.25 0.375 0.25 0.375 0 0.375 0.5 0.375 0.75 0.375 0.75 0.375 0.5'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    <!--MOTOR POD-->
    <group onclick="propel1();">
    <transform translation="0 -0.73 -1.18" rotation="1 0 0 1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height="0.3" radius="0.04"></cylinder>
     </shape>
    </transform>
    <transform translation="0 -0.73 -1.0" rotation="1 0 0 1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cone height="0.06" bottomRadius="0.04"></cone>
     </shape>
    </transform>
    <transform translation="0 -0.73 -1.36" rotation="1 0 0 -1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cone height="0.06" bottomRadius="0.04"></cone>
     </shape>
    </transform>
    <touchSensor id="prop1" enabled="false"/>
    </group>
    
    <!--BLADES-->
    <!--FORE PROP-->
    <group DEF="PROPS">
    <transform DEF="FOREPROP1" center='0 -0.73 -1.38'>
    <Transform translation='0 -0.73 -1.38'>
     <Shape DEF='FanHubTop'>
      <appearance>
        <material diffuseColor="0.01 0.01 0.01"></material>
       </appearance>
      <Sphere radius='.015'/>
     </Shape>
    </Transform>
    <Transform DEF='FirstFanBlade' scale='0.1 .005 .01' rotation="0 0 1 1.571" translation='0 -.63 -1.38'>
     <Shape DEF='FanBlade'>
      <appearance>
        <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <Sphere/>
     </Shape>
    </Transform>
    <Transform DEF='SecondFanBlade' scale='0.1 .005 .01' rotation="0 0 1 0.524" translation='-0.08 -.78 -1.38'>
     <Shape USE='FanBlade'/>
    </Transform>
    <Transform DEF='ThirdFanBlade' scale='0.1 .005 .01' rotation="0 0 1 -0.524" translation='0.08 -.78 -1.38'>
     <Shape USE='FanBlade'/>
    </Transform>
  </transform>
  </group>
  <!--AFT PROP-->
  <Transform DEF='AFTPROP1' center="0 -0.73 -0.98" translation='0 0 0.4'>
     <Shape USE='PROPS'/>
  </Transform>
  </Transform>
  </Transform>
  </Transform>
  </Transform>

  <!--ZIP ON STAND 2-->
    <transform DEF="ZIP2">
    <transform DEF="ZIP22" translation="0.8 0 0" center="-0.3 -0.5 12.3">
    <transform rotation="0 1 0 3.142">
    <transform translation="0.3 0.8 -13.3" rotation="1 0 0 -1.86">
    <!--FUSE FOAM-->
    <transform translation="0 -0.969 -1.47" rotation="1 0 0 0.2">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.001 0.8"></box>
     </shape>
    </transform>
    <transform translation="0 -1.08 -1.41" rotation="1 0 0 -0.089">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.001 0.67"></box>
     </shape>
    </transform>
    <transform translation="0 -1.08 -1.4" rotation="1 0 0 1.48">
    <shape>
      <appearance>
          <material ambientIntensity='0.0933' diffuseColor='0 0 0' shininess='0.51'></material>
        </appearance>
        <text string='200' solid='false'>
        <fontstyle size="0.2"></fontstyle>
        </text>
      </shape>
    </transform>
    <transform translation="0 -1 -1.88">
     <shape>
      <appearance>
      <ImageTexture  url="https://upload.wikimedia.org/wikipedia/commons/3/30/Zipline_1.png">      
      </appearance>
      <box size="0.5001 0.14 0.42"></box>
     </shape>
    </transform>
    <transform translation="0 -0.91 -2">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.02 0.38"></box>
     </shape>
    </transform>
    <transform translation="0 -1.01 -2.15">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.2 0.07"></box>
     </shape>
    </transform>
    <!--LEFT AND RIGHT FUSE FOAMS-->
    <transform translation="0.235 -1.01 -1.984">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.03 0.2 0.27"></box>
     </shape>
    </transform>
    
    <transform translation="-0.235 -1.01 -1.984">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.03 0.2 0.27"></box>
     </shape>
    </transform>
    
    <!--TAIL BOOM-->
    <group onclick="loadbody2();">
    <transform translation="0 -1.05 -0.7" rotation="1 0 0 1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height="1" radius="0.018"></cylinder>
     </shape>
    </transform>
    
    <!--TAIL FINs-->
      <transform rotation='0 0 -1 0.8' translation="0.88 -0.34 -0.01"> 
      <transform scale="0.03 0.06 0.06" translation="-0.1 -0.94 -0.26" rotation="0 1 0 3.142">
        <transform rotation="1 0 0 1.5708" scale='-0.109998 -1 -2.77423'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material diffuseColor="1 1 1"></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1' coordIndex='4 6 11 13 -1 3 2 6 7 -1 7 6 4 5 -1 5 1 3 7 -1 1 0 2 3 -1 5 4 0 1 -1 2 0 8 9 -1 12 13 11 10 -1 2 0 12 10 -1 0 4 13 12 -1 6 2 10 11 -1'>
                  <coordinate DEF='coords_ME_Cube' point='1 1 1 1 0.941509 -1 1 -0.241213 1 1 -2.33791 -1 -1 1 1 -1 0.941509 -1 -1 -0.241213 1 -1 -2.33791 -1 1 1 1 1 -0.241213 1 -4.06306 -0.241213 1.17399 -5.36475 -0.241213 1.17399 -4.06306 1 1.17399 -5.36475 1 1.17399'></coordinate>
                  <textureCoordinate point='0.625 0.25 0.625 0 0.625 0 0.625 0.25 0.375 0.75 0.625 0.75 0.625 1 0.375 1 0.375 0 0.625 0 0.625 0.25 0.375 0.25 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.375 0.5 0.625 0.5 0.625 0.75 0.375 0.75 0.375 0.25 0.625 0.25 0.625 0.5 0.375 0.5 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.625 0.25 0.625 0.25 0.625 0.5 0.625 1 0.625 0.75 0.625 0.75 0.625 1'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    </transform>
    <transform rotation='0 0 1 0.8' translation="-0.74 -0.2 -0.01"> 
      <transform scale="0.03 0.06 0.06" translation="-0.1 -0.94 -0.26" rotation="0 1 0 3.142">
     <transform DEF='Cube_TRANSFORM' rotation='1 0 0 1.5708' scale='-0.109998 -1 -2.77423'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material DEF='MA_Material' diffuseColor='1 1 1'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1' coordIndex='4 6 11 13 -1 3 2 6 7 -1 7 6 4 5 -1 5 1 3 7 -1 1 0 2 3 -1 5 4 0 1 -1 2 0 8 9 -1 12 13 11 10 -1 2 0 12 10 -1 0 4 13 12 -1 6 2 10 11 -1'>
                  <coordinate DEF='coords_ME_Cube' point='1 1 1 1 0.941509 -1 1 -0.241213 1 1 -2.33791 -1 -1 1 1 -1 0.941509 -1 -1 -0.241213 1 -1 -2.33791 -1 1 1 1 1 -0.241213 1 5.06442 -0.241213 1.17399 3.75747 -0.215517 1.17508 5.06442 1 1.17399 3.75747 1.0257 1.17508'></coordinate>
                  <textureCoordinate point='0.625 0.25 0.625 0 0.625 0 0.625 0.25 0.375 0.75 0.625 0.75 0.625 1 0.375 1 0.375 0 0.625 0 0.625 0.25 0.375 0.25 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.375 0.5 0.625 0.5 0.625 0.75 0.375 0.75 0.375 0.25 0.625 0.25 0.625 0.5 0.375 0.5 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.625 0.25 0.625 0.25 0.625 0.5 0.625 1 0.625 0.75 0.625 0.75 0.625 1'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    </transform>
    <Transform translation='0 0 0'>
     <Shape>
      <IndexedTriangleStripSet index='0 1 2' normalPerVertex='true' solid='false'>
       <Coordinate point='0.25 -1.05 -1.076   0.25 -1.12 -1.86   0.25 -0.89 -1.86'/>
      </IndexedTriangleStripSet>
     <Appearance>
      <Material diffuseColor='1 1 1'/>
     </Appearance>
     </Shape>
    </Transform>
    <Transform translation='0 0 0'>
     <Shape>
      <IndexedTriangleStripSet index='0 1 2' normalPerVertex='true' solid='false'>
       <Coordinate point='-0.25 -1.05 -1.076   -0.25 -1.12 -1.86   -0.25 -0.89 -1.86'/>
      </IndexedTriangleStripSet>
     <Appearance>
      <Material diffuseColor='1 1 1'/>
     </Appearance>
     </Shape>
    </Transform> 
    <touchSensor id="zip2" enabled="false"/>
  </group>
  <!--DROP MECHANISM-->
  <transform translation="0 -1.07 -1.944">
     <shape>
      <appearance>
       <material diffuseColor="0.02 0.02 0.02"></material>
      </appearance>
      <box size="0.48 0.03 0.4"></box>
     </shape>
    </transform>
    <group onclick="drop2();">
    <transform DEF="dr2" center="-0.125 0 0" translation="-0.125 -1.109 -1.944">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.25 0.003 0.42"></box>
     </shape>
    </transform>
    <transform DEF="dl2" center="0.125 0 0" translation="0.125 -1.109 -1.944">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.25 0.003 0.42"></box>
     </shape>
    </transform>
    <touchSensor id="mech2" enabled="true"/>
    </group>
    
    <!--PROPULSION SYSTEM-->
    <!--PYLON-->
        <transform scale='0.03 0.04 0.06' translation='0 -1.05 -1.15'>
        <transform DEF='Cube_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.084853 0.634655 1.98526'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material diffuseColor="1 1 1"></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 51 -1 52 53 54 55 -1' coordIndex='0 1 3 2 -1 2 3 7 6 -1 6 7 5 4 -1 4 5 1 0 -1 4 0 13 15 -1 5 7 10 11 -1 10 9 8 11 -1 3 1 8 9 -1 1 5 11 8 -1 7 3 9 10 -1 12 14 15 13 -1 2 6 14 12 -1 0 2 12 13 -1 6 4 15 14 -1'>
                  <coordinate DEF='coords_ME_Cube_001' point='-1 -1 0.972698 -1 -1 2.9727 -1 1 0.972698 -1 1 2.9727 1 -1 0.972698 1 -1 2.9727 1 1 0.972698 1 1 2.9727 -1 -2.9776 3.93558 -1 1 3.93558 1 1 3.93558 1 -2.9776 3.93558 -1 1 0.076012 -1 -2.78163 0.076012 1 1 0.076012 1 -2.78163 0.076012'></coordinate>
                  <textureCoordinate point='0.375 0 0.625 0 0.625 0.25 0.375 0.25 0.375 0.25 0.625 0.25 0.625 0.5 0.375 0.5 0.375 0.5 0.625 0.5 0.625 0.75 0.375 0.75 0.375 0.75 0.625 0.75 0.625 1 0.375 1 0.375 0.75 0.375 1 0.375 1 0.375 0.75 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.625 0.25 0.625 0 0.625 0 0.625 0.25 0.625 1 0.625 0.75 0.625 0.75 0.625 1 0.625 0.5 0.625 0.25 0.625 0.25 0.625 0.5 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.375 0.25 0.375 0.5 0.375 0.5 0.375 0.25 0.375 0 0.375 0.25 0.375 0.25 0.375 0 0.375 0.5 0.375 0.75 0.375 0.75 0.375 0.5'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    <!--MOTOR POD-->
    <group onclick="propel2();">
    <transform translation="0 -0.73 -1.18" rotation="1 0 0 1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height="0.3" radius="0.04"></cylinder>
     </shape>
    </transform>
    <transform translation="0 -0.73 -1.0" rotation="1 0 0 1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cone height="0.06" bottomRadius="0.04"></cone>
     </shape>
    </transform>
    <transform translation="0 -0.73 -1.36" rotation="1 0 0 -1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cone height="0.06" bottomRadius="0.04"></cone>
     </shape>
    </transform>
    <touchSensor id="prop2" enabled="false"/>
    </group>
    
    <!--BLADES-->
    <!--FORE PROP-->
    <group DEF="PROPS2">
    <transform DEF="FOREPROP2" center='0 -0.73 -1.38'>
    <Transform translation='0 -0.73 -1.38'>
     <Shape DEF='FanHubTop'>
      <appearance>
        <material diffuseColor="0.01 0.01 0.01"></material>
       </appearance>
      <Sphere radius='.015'/>
     </Shape>
    </Transform>
    <Transform DEF='FirstFanBlade' scale='0.1 .005 .01' rotation="0 0 1 1.571" translation='0 -.63 -1.38'>
     <Shape DEF='FanBlade'>
      <appearance>
        <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <Sphere/>
     </Shape>
    </Transform>
    <Transform DEF='SecondFanBlade' scale='0.1 .005 .01' rotation="0 0 1 0.524" translation='-0.08 -.78 -1.38'>
     <Shape USE='FanBlade'/>
    </Transform>
    <Transform DEF='ThirdFanBlade' scale='0.1 .005 .01' rotation="0 0 1 -0.524" translation='0.08 -.78 -1.38'>
     <Shape USE='FanBlade'/>
    </Transform>
  </transform>
  </group>
  <!--AFT PROP-->
  <Transform DEF='AFTPROP2' center="0 -0.73 -0.98" translation='0 0 0.4'>
     <Shape USE='PROPS2'/>
  </Transform>
  </Transform>
  </Transform>
  </Transform>
  </Transform>

  <!--ZIP ON STAND 3-->
    <transform DEF="ZIP3">
    <transform DEF="ZIP33" translation="1.6 0 0" center="-0.3 -0.5 12.3">
    <transform rotation="0 1 0 3.142">
    <transform translation="0.3 0.8 -13.3" rotation="1 0 0 -1.86">
    <!--FUSE FOAM-->
    
    <transform translation="0 -0.969 -1.47" rotation="1 0 0 0.2">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.001 0.8"></box>
     </shape>
    </transform>
    <transform translation="0 -1.08 -1.41" rotation="1 0 0 -0.089">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.001 0.67"></box>
     </shape>
    </transform>
    <transform translation="0 -1.08 -1.4" rotation="1 0 0 1.48">
    <shape>
      <appearance>
          <material ambientIntensity='0.0933' diffuseColor='0 0 0' shininess='0.51'></material>
        </appearance>
        <text string='300' solid='false'>
        <fontstyle size="0.2"></fontstyle>
        </text>
      </shape>
    </transform>
    <transform translation="0 -1 -1.88">
     <shape>
      <appearance>
      <ImageTexture  url="https://upload.wikimedia.org/wikipedia/commons/3/30/Zipline_1.png">      
      </appearance>
      <box size="0.5001 0.14 0.42"></box>
     </shape>
    </transform>
    <transform translation="0 -0.91 -2">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.02 0.38"></box>
     </shape>
    </transform>
    <transform translation="0 -1.01 -2.15">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.2 0.07"></box>
     </shape>
    </transform>
    <!--LEFT AND RIGHT FUSE FOAMS-->
    <transform translation="0.235 -1.01 -1.984">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.03 0.2 0.27"></box>
     </shape>
    </transform>
    
    <transform translation="-0.235 -1.01 -1.984">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.03 0.2 0.27"></box>
     </shape>
    </transform>
     
    <!--DROP MECHANISM-->
  <transform translation="0 -1.07 -1.944">
     <shape>
      <appearance>
       <material diffuseColor="0.02 0.02 0.02"></material>
      </appearance>
      <box size="0.48 0.03 0.4"></box>
     </shape>
    </transform>
    <group onclick="drop3();">
    <transform DEF="dr3" center="-0.125 0 0" translation="-0.125 -1.109 -1.944">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.25 0.003 0.42"></box>
     </shape>
    </transform>
    <transform DEF="dl3" center="0.125 0 0" translation="0.125 -1.109 -1.944">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.25 0.003 0.42"></box>
     </shape>
    </transform>
    <touchSensor id="mech3" enabled="true"/>
    </group>
    <!--TAIL BOOM-->
    <group onclick="loadbody3();">
    <transform translation="0 -1.05 -0.7" rotation="1 0 0 1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height="1" radius="0.018"></cylinder>
     </shape>
    </transform>
    
    <!--TAIL FINs-->
     
      <transform rotation='0 0 -1 0.8' translation="0.88 -0.34 -0.01"> 
      <transform scale="0.03 0.06 0.06" translation="-0.1 -0.94 -0.26" rotation="0 1 0 3.142">
        <transform rotation="1 0 0 1.5708" scale='-0.109998 -1 -2.77423'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material diffuseColor="1 1 1"></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1' coordIndex='4 6 11 13 -1 3 2 6 7 -1 7 6 4 5 -1 5 1 3 7 -1 1 0 2 3 -1 5 4 0 1 -1 2 0 8 9 -1 12 13 11 10 -1 2 0 12 10 -1 0 4 13 12 -1 6 2 10 11 -1'>
                  <coordinate DEF='coords_ME_Cube' point='1 1 1 1 0.941509 -1 1 -0.241213 1 1 -2.33791 -1 -1 1 1 -1 0.941509 -1 -1 -0.241213 1 -1 -2.33791 -1 1 1 1 1 -0.241213 1 -4.06306 -0.241213 1.17399 -5.36475 -0.241213 1.17399 -4.06306 1 1.17399 -5.36475 1 1.17399'></coordinate>
                  <textureCoordinate point='0.625 0.25 0.625 0 0.625 0 0.625 0.25 0.375 0.75 0.625 0.75 0.625 1 0.375 1 0.375 0 0.625 0 0.625 0.25 0.375 0.25 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.375 0.5 0.625 0.5 0.625 0.75 0.375 0.75 0.375 0.25 0.625 0.25 0.625 0.5 0.375 0.5 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.625 0.25 0.625 0.25 0.625 0.5 0.625 1 0.625 0.75 0.625 0.75 0.625 1'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    </transform>
    <transform rotation='0 0 1 0.8' translation="-0.74 -0.2 -0.01"> 
      <transform scale="0.03 0.06 0.06" translation="-0.1 -0.94 -0.26" rotation="0 1 0 3.142">
     <transform DEF='Cube_TRANSFORM' rotation='1 0 0 1.5708' scale='-0.109998 -1 -2.77423'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material DEF='MA_Material' diffuseColor='1 1 1'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1' coordIndex='4 6 11 13 -1 3 2 6 7 -1 7 6 4 5 -1 5 1 3 7 -1 1 0 2 3 -1 5 4 0 1 -1 2 0 8 9 -1 12 13 11 10 -1 2 0 12 10 -1 0 4 13 12 -1 6 2 10 11 -1'>
                  <coordinate DEF='coords_ME_Cube' point='1 1 1 1 0.941509 -1 1 -0.241213 1 1 -2.33791 -1 -1 1 1 -1 0.941509 -1 -1 -0.241213 1 -1 -2.33791 -1 1 1 1 1 -0.241213 1 5.06442 -0.241213 1.17399 3.75747 -0.215517 1.17508 5.06442 1 1.17399 3.75747 1.0257 1.17508'></coordinate>
                  <textureCoordinate point='0.625 0.25 0.625 0 0.625 0 0.625 0.25 0.375 0.75 0.625 0.75 0.625 1 0.375 1 0.375 0 0.625 0 0.625 0.25 0.375 0.25 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.375 0.5 0.625 0.5 0.625 0.75 0.375 0.75 0.375 0.25 0.625 0.25 0.625 0.5 0.375 0.5 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.625 0.25 0.625 0.25 0.625 0.5 0.625 1 0.625 0.75 0.625 0.75 0.625 1'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    </transform>
    <Transform translation='0 0 0'>
     <Shape>
      <IndexedTriangleStripSet index='0 1 2' normalPerVertex='true' solid='false'>
       <Coordinate point='0.25 -1.05 -1.076   0.25 -1.12 -1.86   0.25 -0.89 -1.86'/>
      </IndexedTriangleStripSet>
     <Appearance>
      <Material diffuseColor='1 1 1'/>
     </Appearance>
     </Shape>
    </Transform>
    <Transform translation='0 0 0'>
     <Shape>
      <IndexedTriangleStripSet index='0 1 2' normalPerVertex='true' solid='false'>
       <Coordinate point='-0.25 -1.05 -1.076   -0.25 -1.12 -1.86   -0.25 -0.89 -1.86'/>
      </IndexedTriangleStripSet>
     <Appearance>
      <Material diffuseColor='1 1 1'/>
     </Appearance>
     </Shape>
    </Transform> 
    <touchSensor id="zip3" enabled="false"/>
  </group>
    <!--PROPULSION SYSTEM-->
    <!--PYLON-->
        <transform scale='0.03 0.04 0.06' translation='0 -1.05 -1.15'>
        <transform DEF='Cube_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.084853 0.634655 1.98526'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material diffuseColor="1 1 1"></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 51 -1 52 53 54 55 -1' coordIndex='0 1 3 2 -1 2 3 7 6 -1 6 7 5 4 -1 4 5 1 0 -1 4 0 13 15 -1 5 7 10 11 -1 10 9 8 11 -1 3 1 8 9 -1 1 5 11 8 -1 7 3 9 10 -1 12 14 15 13 -1 2 6 14 12 -1 0 2 12 13 -1 6 4 15 14 -1'>
                  <coordinate DEF='coords_ME_Cube_001' point='-1 -1 0.972698 -1 -1 2.9727 -1 1 0.972698 -1 1 2.9727 1 -1 0.972698 1 -1 2.9727 1 1 0.972698 1 1 2.9727 -1 -2.9776 3.93558 -1 1 3.93558 1 1 3.93558 1 -2.9776 3.93558 -1 1 0.076012 -1 -2.78163 0.076012 1 1 0.076012 1 -2.78163 0.076012'></coordinate>
                  <textureCoordinate point='0.375 0 0.625 0 0.625 0.25 0.375 0.25 0.375 0.25 0.625 0.25 0.625 0.5 0.375 0.5 0.375 0.5 0.625 0.5 0.625 0.75 0.375 0.75 0.375 0.75 0.625 0.75 0.625 1 0.375 1 0.375 0.75 0.375 1 0.375 1 0.375 0.75 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.625 0.25 0.625 0 0.625 0 0.625 0.25 0.625 1 0.625 0.75 0.625 0.75 0.625 1 0.625 0.5 0.625 0.25 0.625 0.25 0.625 0.5 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.375 0.25 0.375 0.5 0.375 0.5 0.375 0.25 0.375 0 0.375 0.25 0.375 0.25 0.375 0 0.375 0.5 0.375 0.75 0.375 0.75 0.375 0.5'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    <!--MOTOR POD-->
    <group onclick="propel3();">
    <transform translation="0 -0.73 -1.18" rotation="1 0 0 1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height="0.3" radius="0.04"></cylinder>
     </shape>
    </transform>
    <transform translation="0 -0.73 -1.0" rotation="1 0 0 1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cone height="0.06" bottomRadius="0.04"></cone>
     </shape>
    </transform>
    <transform translation="0 -0.73 -1.36" rotation="1 0 0 -1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cone height="0.06" bottomRadius="0.04"></cone>
     </shape>
    </transform>
    <touchSensor id="prop3" enabled="false"/>
    </group>
    <!--BLADES-->
    <!--FORE PROP-->
    <group DEF="PROPS3">
    <transform DEF="FOREPROP3" center='0 -0.73 -1.38'>
    <Transform translation='0 -0.73 -1.38'>
     <Shape DEF='FanHubTop'>
      <appearance>
        <material diffuseColor="0.01 0.01 0.01"></material>
       </appearance>
      <Sphere radius='.015'/>
     </Shape>
    </Transform>
    <Transform DEF='FirstFanBlade' scale='0.1 .005 .01' rotation="0 0 1 1.571" translation='0 -.63 -1.38'>
     <Shape DEF='FanBlade'>
      <appearance>
        <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <Sphere/>
     </Shape>
    </Transform>
    <Transform DEF='SecondFanBlade' scale='0.1 .005 .01' rotation="0 0 1 0.524" translation='-0.08 -.78 -1.38'>
     <Shape USE='FanBlade'/>
    </Transform>
    <Transform DEF='ThirdFanBlade' scale='0.1 .005 .01' rotation="0 0 1 -0.524" translation='0.08 -.78 -1.38'>
     <Shape USE='FanBlade'/>
    </Transform>
  </transform>
  </group>
  <!--AFT PROP-->
  <Transform DEF='AFTPROP3' center="0 -0.73 -0.98" translation='0 0 0.4'>
     <Shape USE='PROPS3'/>
  </Transform>
  </Transform>
  </Transform>
  </Transform>
  </Transform>
 
  <!--ZIP ON STAND 4-->
    <transform DEF="ZIP4">
    <transform DEF="ZIP44" translation="2.4 0 0" center="-0.3 -0.5 12.3">
    <transform rotation="0 1 0 3.142">
    <transform translation="0.3 0.8 -13.3" rotation="1 0 0 -1.86">
    <!--FUSE FOAM-->
    
    <transform translation="0 -0.969 -1.47" rotation="1 0 0 0.2">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.001 0.8"></box>
     </shape>
    </transform>
    <transform translation="0 -1.08 -1.41" rotation="1 0 0 -0.089">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.001 0.67"></box>
     </shape>
    </transform>
    <transform translation="0 -1.08 -1.4" rotation="1 0 0 1.48">
    <shape>
      <appearance>
          <material ambientIntensity='0.0933' diffuseColor='0 0 0' shininess='0.51'></material>
        </appearance>
        <text string='400' solid='false'>
        <fontstyle size="0.2"></fontstyle>
        </text>
      </shape>
    </transform>
    <transform translation="0 -1 -1.88">
     <shape>
      <appearance>
      <ImageTexture  url="https://upload.wikimedia.org/wikipedia/commons/3/30/Zipline_1.png">      
      </appearance>
      <box size="0.5001 0.14 0.42"></box>
     </shape>
    </transform>
    <transform translation="0 -0.91 -2">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.02 0.38"></box>
     </shape>
    </transform>
    <transform translation="0 -1.01 -2.15">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.5 0.2 0.07"></box>
     </shape>
    </transform>
    <!--LEFT AND RIGHT FUSE FOAMS-->
    <transform translation="0.235 -1.01 -1.984">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.03 0.2 0.27"></box>
     </shape>
    </transform>
    
    <transform translation="-0.235 -1.01 -1.984">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.03 0.2 0.27"></box>
     </shape>
    </transform>
     
    <!--DROP MECHANISM-->
  <transform translation="0 -1.07 -1.944">
     <shape>
      <appearance>
       <material diffuseColor="0.02 0.02 0.02"></material>
      </appearance>
      <box size="0.48 0.03 0.4"></box>
     </shape>
    </transform>
    <group onclick="drop4();">
    <transform DEF="dr4" center="-0.125 0 0" translation="-0.125 -1.109 -1.944">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.25 0.003 0.42"></box>
     </shape>
    </transform>
    <transform DEF="dl4" center="0.125 0 0" translation="0.125 -1.109 -1.944">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.25 0.003 0.42"></box>
     </shape>
    </transform>
    <touchSensor id="mech4" enabled="true"/>
    </group>
    <!--TAIL BOOM-->
    <group onclick="loadbody4();">
    <transform translation="0 -1.05 -0.7" rotation="1 0 0 1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height="1" radius="0.018"></cylinder>
     </shape>
    </transform>
    
    <!--TAIL FINs-->
     
      <transform rotation='0 0 -1 0.8' translation="0.88 -0.34 -0.01"> 
      <transform scale="0.03 0.06 0.06" translation="-0.1 -0.94 -0.26" rotation="0 1 0 3.142">
        <transform rotation="1 0 0 1.5708" scale='-0.109998 -1 -2.77423'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material diffuseColor="1 1 1"></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1' coordIndex='4 6 11 13 -1 3 2 6 7 -1 7 6 4 5 -1 5 1 3 7 -1 1 0 2 3 -1 5 4 0 1 -1 2 0 8 9 -1 12 13 11 10 -1 2 0 12 10 -1 0 4 13 12 -1 6 2 10 11 -1'>
                  <coordinate DEF='coords_ME_Cube' point='1 1 1 1 0.941509 -1 1 -0.241213 1 1 -2.33791 -1 -1 1 1 -1 0.941509 -1 -1 -0.241213 1 -1 -2.33791 -1 1 1 1 1 -0.241213 1 -4.06306 -0.241213 1.17399 -5.36475 -0.241213 1.17399 -4.06306 1 1.17399 -5.36475 1 1.17399'></coordinate>
                  <textureCoordinate point='0.625 0.25 0.625 0 0.625 0 0.625 0.25 0.375 0.75 0.625 0.75 0.625 1 0.375 1 0.375 0 0.625 0 0.625 0.25 0.375 0.25 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.375 0.5 0.625 0.5 0.625 0.75 0.375 0.75 0.375 0.25 0.625 0.25 0.625 0.5 0.375 0.5 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.625 0.25 0.625 0.25 0.625 0.5 0.625 1 0.625 0.75 0.625 0.75 0.625 1'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    </transform>
    <transform rotation='0 0 1 0.8' translation="-0.74 -0.2 -0.01"> 
      <transform scale="0.03 0.06 0.06" translation="-0.1 -0.94 -0.26" rotation="0 1 0 3.142">
     <transform DEF='Cube_TRANSFORM' rotation='1 0 0 1.5708' scale='-0.109998 -1 -2.77423'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material DEF='MA_Material' diffuseColor='1 1 1'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1' coordIndex='4 6 11 13 -1 3 2 6 7 -1 7 6 4 5 -1 5 1 3 7 -1 1 0 2 3 -1 5 4 0 1 -1 2 0 8 9 -1 12 13 11 10 -1 2 0 12 10 -1 0 4 13 12 -1 6 2 10 11 -1'>
                  <coordinate DEF='coords_ME_Cube' point='1 1 1 1 0.941509 -1 1 -0.241213 1 1 -2.33791 -1 -1 1 1 -1 0.941509 -1 -1 -0.241213 1 -1 -2.33791 -1 1 1 1 1 -0.241213 1 5.06442 -0.241213 1.17399 3.75747 -0.215517 1.17508 5.06442 1 1.17399 3.75747 1.0257 1.17508'></coordinate>
                  <textureCoordinate point='0.625 0.25 0.625 0 0.625 0 0.625 0.25 0.375 0.75 0.625 0.75 0.625 1 0.375 1 0.375 0 0.625 0 0.625 0.25 0.375 0.25 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.375 0.5 0.625 0.5 0.625 0.75 0.375 0.75 0.375 0.25 0.625 0.25 0.625 0.5 0.375 0.5 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.625 0.25 0.625 0.25 0.625 0.5 0.625 1 0.625 0.75 0.625 0.75 0.625 1'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    </transform>
    <Transform translation='0 0 0'>
     <Shape>
      <IndexedTriangleStripSet index='0 1 2' normalPerVertex='true' solid='false'>
       <Coordinate point='0.25 -1.05 -1.076   0.25 -1.12 -1.86   0.25 -0.89 -1.86'/>
      </IndexedTriangleStripSet>
     <Appearance>
      <Material diffuseColor='1 1 1'/>
     </Appearance>
     </Shape>
    </Transform>
    <Transform translation='0 0 0'>
     <Shape>
      <IndexedTriangleStripSet index='0 1 2' normalPerVertex='true' solid='false'>
       <Coordinate point='-0.25 -1.05 -1.076   -0.25 -1.12 -1.86   -0.25 -0.89 -1.86'/>
      </IndexedTriangleStripSet>
     <Appearance>
      <Material diffuseColor='1 1 1'/>
     </Appearance>
     </Shape>
    </Transform> 
    <touchSensor id="zip4" enabled="false"/>
    <Sound>
    <AudioClip id="s5" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/9/91/Sound4.wav"/>
    </Sound>
    <Sound>
    <AudioClip id="e5" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/7/7e/Error_message.wav"/>
    </Sound>
     <Sound>
    <AudioClip id="d5" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/6/6f/Doublesele.wav"/>
    </Sound>
  </group>
    <!--PROPULSION SYSTEM-->
    <!--PYLON-->
        <transform scale='0.03 0.04 0.06' translation='0 -1.05 -1.15'>
        <transform DEF='Cube_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.084853 0.634655 1.98526'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material diffuseColor="1 1 1"></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 51 -1 52 53 54 55 -1' coordIndex='0 1 3 2 -1 2 3 7 6 -1 6 7 5 4 -1 4 5 1 0 -1 4 0 13 15 -1 5 7 10 11 -1 10 9 8 11 -1 3 1 8 9 -1 1 5 11 8 -1 7 3 9 10 -1 12 14 15 13 -1 2 6 14 12 -1 0 2 12 13 -1 6 4 15 14 -1'>
                  <coordinate DEF='coords_ME_Cube_001' point='-1 -1 0.972698 -1 -1 2.9727 -1 1 0.972698 -1 1 2.9727 1 -1 0.972698 1 -1 2.9727 1 1 0.972698 1 1 2.9727 -1 -2.9776 3.93558 -1 1 3.93558 1 1 3.93558 1 -2.9776 3.93558 -1 1 0.076012 -1 -2.78163 0.076012 1 1 0.076012 1 -2.78163 0.076012'></coordinate>
                  <textureCoordinate point='0.375 0 0.625 0 0.625 0.25 0.375 0.25 0.375 0.25 0.625 0.25 0.625 0.5 0.375 0.5 0.375 0.5 0.625 0.5 0.625 0.75 0.375 0.75 0.375 0.75 0.625 0.75 0.625 1 0.375 1 0.375 0.75 0.375 1 0.375 1 0.375 0.75 0.625 0.75 0.625 0.5 0.625 0.5 0.625 0.75 0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.625 0.25 0.625 0 0.625 0 0.625 0.25 0.625 1 0.625 0.75 0.625 0.75 0.625 1 0.625 0.5 0.625 0.25 0.625 0.25 0.625 0.5 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.375 0.25 0.375 0.5 0.375 0.5 0.375 0.25 0.375 0 0.375 0.25 0.375 0.25 0.375 0 0.375 0.5 0.375 0.75 0.375 0.75 0.375 0.5'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    <!--MOTOR POD-->
    <group onclick="propel4();">
    <transform translation="0 -0.73 -1.18" rotation="1 0 0 1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height="0.3" radius="0.04"></cylinder>
     </shape>
    </transform>
    <transform translation="0 -0.73 -1.0" rotation="1 0 0 1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cone height="0.06" bottomRadius="0.04"></cone>
     </shape>
    </transform>
    <transform translation="0 -0.73 -1.36" rotation="1 0 0 -1.571">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cone height="0.06" bottomRadius="0.04"></cone>
     </shape>
    </transform>
    <touchSensor id="prop4" enabled="false"/>
    </group>
    <!--BLADES-->
    <!--FORE PROP-->
    <group DEF="PROPS4">
    <transform DEF="FOREPROP4" center='0 -0.73 -1.38'>
    <Transform translation='0 -0.73 -1.38'>
     <Shape DEF='FanHubTop'>
      <appearance>
        <material diffuseColor="0.01 0.01 0.01"></material>
       </appearance>
      <Sphere radius='.015'/>
     </Shape>
    </Transform>
    <Transform DEF='FirstFanBlade' scale='0.1 .005 .01' rotation="0 0 1 1.571" translation='0 -.63 -1.38'>
     <Shape DEF='FanBlade'>
      <appearance>
        <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <Sphere/>
     </Shape>
    </Transform>
    <Transform DEF='SecondFanBlade' scale='0.1 .005 .01' rotation="0 0 1 0.524" translation='-0.08 -.78 -1.38'>
     <Shape USE='FanBlade'/>
    </Transform>
    <Transform DEF='ThirdFanBlade' scale='0.1 .005 .01' rotation="0 0 1 -0.524" translation='0.08 -.78 -1.38'>
     <Shape USE='FanBlade'/>
    </Transform>
  </transform>
  </group>
  <!--AFT PROP-->
  <Transform DEF='AFTPROP4' center="0 -0.73 -0.98" translation='0 0 0.4'>
     <Shape USE='PROPS4'/>
  </Transform>
  </Transform>
  </Transform>
  </Transform>
  </Transform>

  <!--WING 1-->
  <group>
  <transform DEF="WING1" translation="7.65 0.84 8" rotation="0 1 0 3.142">
  <transform onclick="loadwing1();" scale="0.2 0.16 0.24" rotation="0 0 1 -2.8">
  <transform DEF='Cube_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.636792 7.03658 0.090453'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material DEF='MA_Material_002' ambientIntensity='0' shininess='0.5' diffuseColor='1 0 0'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 -1 19 20 21 22 -1 23 24 25 -1 26 27 28 29 -1 30 31 32 33 -1 34 35 36 37 -1 38 39 40 41 -1 42 43 44 45 -1 46 47 48 49 -1 50 51 52 53 -1 54 55 56 57 -1 58 59 60 61 -1 62 63 64 65 -1 66 67 68 69 -1 70 71 72 73 -1 74 75 76 77 -1 78 79 80 81 -1 82 83 84 85 -1 86 87 88 89 -1 90 91 92 93 -1 94 95 96 97 -1 98 99 100 101 -1 102 103 104 105 -1 106 107 108 109 -1 110 111 112 113 -1 114 115 116 117 -1' coordIndex='33 34 12 13 -1 32 33 13 11 -1 35 32 11 17 -1 36 35 17 20 -1 1 21 14 -1 34 36 20 12 -1 0 15 18 -1 10 19 26 23 -1 19 16 25 26 -1 16 8 22 25 -1 8 9 24 22 -1 9 10 23 24 -1 23 26 30 28 -1 25 22 27 29 -1 22 24 31 27 -1 24 23 28 31 -1 39 41 36 34 -1 40 37 32 35 -1 37 38 33 32 -1 38 39 34 33 -1 7 6 39 38 -1 5 7 38 37 -1 42 5 37 40 -1 43 42 40 41 -1 6 43 41 39 -1 28 30 45 3 -1 30 29 44 45 -1 29 27 2 44 -1 27 31 4 2 -1 31 28 3 4 -1'>
                  <coordinate DEF='coords_ME_Cube' point='-1 1 1 -1 -1 1 -1 0.155115 1 1 0.155115 1 1 0.155115 -1 -1 -0.163559 1 1 -0.163559 1 1 -0.163559 -1 -1 0.963346 1 1 0.963346 -1 1 0.963346 1 -1 -0.963577 1 1 -0.963577 1 1 -0.963577 -1 -0.483032 -1 1 -0.483032 1 1 -0.483032 0.963346 1 -0.483032 -0.963577 1 0.491634 1 1 0.491634 0.963346 1 0.491634 -0.963577 1 0.491634 -1 1 -1 0.430519 1 1 0.430519 1 1 0.430519 -1 -0.483032 0.430519 1 0.491634 0.430519 1 -1 0.415692 1 1 0.415692 1 -0.483032 0.415692 1 0.491634 0.415692 1 1 0.415692 -1 -1 -0.431638 1 1 -0.431638 -1 1 -0.431638 1 -0.483032 -0.431638 1 0.491634 -0.431638 1 -1 -0.417206 1 1 -0.417206 -1 1 -0.417206 1 -0.483032 -0.417206 1 0.491634 -0.417206 1 -0.483032 -0.163559 1 0.491634 -0.163559 1 -0.483032 0.155115 1 0.491634 0.155115 1'></coordinate>
                  <textureCoordinate point='0.375 0.679 0.625 0.679 0.625 0.7454 0.375 0.7454 0.3115 0.679 0.375 0.679 0.375 0.7454 0.3115 0.7454 0.8104 0.679 0.875 0.679 0.875 0.7454 0.8104 0.7454 0.6885 0.679 0.8104 0.679 0.8104 0.7454 0.6885 0.7454 0.375 0.8135 0.625 0.8135 0.625 0.9354 0.625 0.679 0.6885 0.679 0.6885 0.7454 0.625 0.7454 0.375 0.3146 0.625 0.3146 0.625 0.4365 0.625 0.5046 0.6885 0.5046 0.6885 0.5712 0.625 0.5712 0.6885 0.5046 0.8104 0.5046 0.8104 0.5712 0.6885 0.5712 0.8104 0.5046 0.875 0.5046 0.875 0.5712 0.8104 0.5712 0.3115 0.5046 0.375 0.5046 0.375 0.5712 0.3115 0.5712 0.375 0.5046 0.625 0.5046 0.625 0.5712 0.375 0.5712 0.625 0.5712 0.6885 0.5712 0.6885 0.573 0.625 0.573 0.8104 0.5712 0.875 0.5712 0.875 0.573 0.8104 0.573 0.3115 0.5712 0.375 0.5712 0.375 0.573 0.3115 0.573 0.375 0.5712 0.625 0.5712 0.625 0.573 0.375 0.573 0.625 0.6772 0.6885 0.6772 0.6885 0.679 0.625 0.679 0.8104 0.6772 0.875 0.6772 0.875 0.679 0.8104 0.679 0.3115 0.6772 0.375 0.6772 0.375 0.679 0.3115 0.679 0.375 0.6772 0.625 0.6772 0.625 0.679 0.375 0.679 0.375 0.6454 0.625 0.6454 0.625 0.6772 0.375 0.6772 0.3115 0.6454 0.375 0.6454 0.375 0.6772 0.3115 0.6772 0.8104 0.6454 0.875 0.6454 0.875 0.6772 0.8104 0.6772 0.6885 0.6454 0.8104 0.6454 0.8104 0.6772 0.6885 0.6772 0.625 0.6454 0.6885 0.6454 0.6885 0.6772 0.625 0.6772 0.625 0.573 0.6885 0.573 0.6885 0.6056 0.625 0.6056 0.6885 0.573 0.8104 0.573 0.8104 0.6056 0.6885 0.6056 0.8104 0.573 0.875 0.573 0.875 0.6056 0.8104 0.6056 0.3115 0.573 0.375 0.573 0.375 0.6056 0.3115 0.6056 0.375 0.573 0.625 0.573 0.625 0.6056 0.375 0.6056'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
        <transform DEF='Cube_001_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.636792 7.03658 0.090453'>
          <transform DEF='Cube_001_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material DEF='MA_Material' ambientIntensity='0' shininess='0.5' diffuseColor='1 1 1'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 -1 3 4 5 6 -1 7 8 9 -1 10 11 12 13 -1 14 15 16 17 -1 18 19 20 21 -1 22 23 24 25 -1 26 27 28 29 -1 30 31 32 -1 33 34 35 36 -1 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 -1 51 52 53 54 -1 55 56 57 -1 58 59 60 61 -1 62 63 64 65 -1 66 67 68 69 -1 70 71 72 73 -1 74 75 76 77 -1 78 79 80 81 -1 82 83 84 85 -1 86 87 88 89 -1' coordIndex='22 0 8 -1 2 1 4 5 -1 0 2 6 -1 8 0 3 9 -1 6 2 5 7 -1 3 0 6 7 -1 10 8 9 11 -1 23 22 8 10 -1 1 23 10 -1 1 10 11 4 -1 5 3 7 -1 13 12 24 25 -1 16 17 31 29 -1 4 11 21 -1 11 9 20 21 -1 9 3 20 -1 25 24 26 27 -1 15 13 25 27 -1 14 15 27 26 -1 12 14 26 24 -1 30 28 29 31 -1 18 16 29 28 -1 19 18 28 30 -1 17 19 30 31 -1'>
                  <coordinate DEF='coords_ME_Cube_001' point='-1 0.155115 1 1 0.155115 1 1 0.155115 -1 -1 -0.163559 1 1 -0.163559 1 1 -0.163559 -1 -1 0.133987 -0.749018 -1 -0.142993 -0.749018 -0.483032 0.133987 1 -0.483032 -0.142993 1 0.491634 0.133987 1 0.491634 -0.142993 1 -0.483032 0.430519 1 0.491634 0.430519 1 -0.483032 0.415692 1 0.491634 0.415692 1 -0.483032 -0.431638 1 0.491634 -0.431638 1 -0.483032 -0.417206 1 0.491634 -0.417206 1 -0.483032 -0.163559 1 0.491634 -0.163559 1 -0.483032 0.155115 1 0.491634 0.155115 1 -0.483032 0.430519 4.26136 0.491634 0.430519 4.26136 -0.483032 0.415692 4.26136 0.491634 0.415692 4.26136 -0.483032 -0.417206 4.59761 -0.483032 -0.431638 4.59761 0.491634 -0.417206 4.59761 0.491634 -0.431638 4.59761'></coordinate>
                  <textureCoordinate point='0.8104 0.6056 0.875 0.6083 0.8104 0.6083 0.375 0.6083 0.625 0.6083 0.625 0.6429 0.375 0.6429 0.3115 0.6083 0.375 0.6083 0.3115 0.6083 0.8104 0.6083 0.875 0.6083 0.875 0.6429 0.8104 0.6429 0.3115 0.6083 0.375 0.6083 0.375 0.6429 0.3115 0.6429 0.375 0.1071 0.375 0.1417 0.375 0.1417 0.375 0.1071 0.6885 0.6083 0.8104 0.6083 0.8104 0.6429 0.6885 0.6429 0.6885 0.6056 0.8104 0.6056 0.8104 0.6083 0.6885 0.6083 0.625 0.6056 0.6885 0.6056 0.6885 0.6083 0.625 0.6083 0.6885 0.6083 0.6885 0.6429 0.625 0.6429 0.375 0.6429 0.3115 0.6429 0.3115 0.6429 0.6885 0.5712 0.8104 0.5712 0.8104 0.5712 0.6885 0.5712 0.8104 0.679 0.6885 0.679 0.6885 0.679 0.8104 0.679 0.625 0.6429 0.6885 0.6429 0.6885 0.6454 0.6885 0.6429 0.8104 0.6429 0.8104 0.6454 0.6885 0.6454 0.8104 0.6429 0.875 0.6454 0.8104 0.6454 0.6885 0.5712 0.8104 0.5712 0.8104 0.573 0.6885 0.573 0.6885 0.573 0.6885 0.5712 0.6885 0.5712 0.6885 0.573 0.8104 0.573 0.6885 0.573 0.6885 0.573 0.8104 0.573 0.8104 0.5712 0.8104 0.573 0.8104 0.573 0.8104 0.5712 0.6885 0.6772 0.8104 0.6772 0.8104 0.679 0.6885 0.679 0.8104 0.6772 0.8104 0.679 0.8104 0.679 0.8104 0.6772 0.6885 0.6772 0.8104 0.6772 0.8104 0.6772 0.6885 0.6772 0.6885 0.679 0.6885 0.6772 0.6885 0.6772 0.6885 0.679'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
        <transform DEF='Cube_002_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.636792 7.03658 0.090453'>
          <transform DEF='Cube_002_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material USE='MA_Material'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1' coordIndex='15 9 5 12 -1 9 11 3 5 -1 11 10 2 3 -1 4 16 0 1 -1 13 4 6 14 -1 4 1 7 6 -1 1 0 8 7 -1 16 13 14 17 -1 18 15 12 19 -1 10 18 19 2 -1 3 2 19 5 -1 0 16 17 8 -1'>
                  <coordinate DEF='coords_ME_Cube_002' point='1 1 1 1 1 -1 1 -1 1 1 -1 -1 -1 1 1 -1 -1 1 -1 0.963346 1 1 0.963346 -1 1 0.963346 1 -1 -0.963577 1 1 -0.963577 1 1 -0.963577 -1 -0.483032 -1 1 -0.483032 1 1 -0.483032 0.963346 1 -0.483032 -0.963577 1 0.491634 1 1 0.491634 0.963346 1 0.491634 -0.963577 1 0.491634 -1 1'></coordinate>
                  <textureCoordinate point='0.8104 0.7454 0.875 0.7454 0.875 0.75 0.8104 0.75 0.3115 0.7454 0.375 0.7454 0.375 0.75 0.3115 0.75 0.375 0.7454 0.625 0.7454 0.625 0.75 0.375 0.75 0.375 0.4365 0.625 0.4365 0.625 0.5 0.375 0.5 0.8104 0.5 0.875 0.5 0.875 0.5046 0.8104 0.5046 0.3115 0.5 0.375 0.5 0.375 0.5046 0.3115 0.5046 0.375 0.5 0.625 0.5 0.625 0.5046 0.375 0.5046 0.6885 0.5 0.8104 0.5 0.8104 0.5046 0.6885 0.5046 0.6885 0.7454 0.8104 0.7454 0.8104 0.75 0.6885 0.75 0.625 0.7454 0.6885 0.7454 0.6885 0.75 0.625 0.75 0.375 0.75 0.625 0.75 0.625 0.8135 0.375 0.8135 0.625 0.5 0.6885 0.5 0.6885 0.5046 0.625 0.5046'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    </transform>
    <touchSensor id="wing1" enabled="false"/>
    </group>

  <!--WING 2-->
  <group>
  <transform DEF="WING2" translation="7.5 0.47 8" rotation="0 1 0 3.142">
  <transform onclick="loadwing2();" scale="0.2 0.16 0.24" rotation="0 0 1 -2.8">
  <transform DEF='Cube_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.636792 7.03658 0.090453'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material DEF='MA_Material_002' ambientIntensity='0' shininess='0.5' diffuseColor='1 0 0'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 -1 19 20 21 22 -1 23 24 25 -1 26 27 28 29 -1 30 31 32 33 -1 34 35 36 37 -1 38 39 40 41 -1 42 43 44 45 -1 46 47 48 49 -1 50 51 52 53 -1 54 55 56 57 -1 58 59 60 61 -1 62 63 64 65 -1 66 67 68 69 -1 70 71 72 73 -1 74 75 76 77 -1 78 79 80 81 -1 82 83 84 85 -1 86 87 88 89 -1 90 91 92 93 -1 94 95 96 97 -1 98 99 100 101 -1 102 103 104 105 -1 106 107 108 109 -1 110 111 112 113 -1 114 115 116 117 -1' coordIndex='33 34 12 13 -1 32 33 13 11 -1 35 32 11 17 -1 36 35 17 20 -1 1 21 14 -1 34 36 20 12 -1 0 15 18 -1 10 19 26 23 -1 19 16 25 26 -1 16 8 22 25 -1 8 9 24 22 -1 9 10 23 24 -1 23 26 30 28 -1 25 22 27 29 -1 22 24 31 27 -1 24 23 28 31 -1 39 41 36 34 -1 40 37 32 35 -1 37 38 33 32 -1 38 39 34 33 -1 7 6 39 38 -1 5 7 38 37 -1 42 5 37 40 -1 43 42 40 41 -1 6 43 41 39 -1 28 30 45 3 -1 30 29 44 45 -1 29 27 2 44 -1 27 31 4 2 -1 31 28 3 4 -1'>
                  <coordinate DEF='coords_ME_Cube' point='-1 1 1 -1 -1 1 -1 0.155115 1 1 0.155115 1 1 0.155115 -1 -1 -0.163559 1 1 -0.163559 1 1 -0.163559 -1 -1 0.963346 1 1 0.963346 -1 1 0.963346 1 -1 -0.963577 1 1 -0.963577 1 1 -0.963577 -1 -0.483032 -1 1 -0.483032 1 1 -0.483032 0.963346 1 -0.483032 -0.963577 1 0.491634 1 1 0.491634 0.963346 1 0.491634 -0.963577 1 0.491634 -1 1 -1 0.430519 1 1 0.430519 1 1 0.430519 -1 -0.483032 0.430519 1 0.491634 0.430519 1 -1 0.415692 1 1 0.415692 1 -0.483032 0.415692 1 0.491634 0.415692 1 1 0.415692 -1 -1 -0.431638 1 1 -0.431638 -1 1 -0.431638 1 -0.483032 -0.431638 1 0.491634 -0.431638 1 -1 -0.417206 1 1 -0.417206 -1 1 -0.417206 1 -0.483032 -0.417206 1 0.491634 -0.417206 1 -0.483032 -0.163559 1 0.491634 -0.163559 1 -0.483032 0.155115 1 0.491634 0.155115 1'></coordinate>
                  <textureCoordinate point='0.375 0.679 0.625 0.679 0.625 0.7454 0.375 0.7454 0.3115 0.679 0.375 0.679 0.375 0.7454 0.3115 0.7454 0.8104 0.679 0.875 0.679 0.875 0.7454 0.8104 0.7454 0.6885 0.679 0.8104 0.679 0.8104 0.7454 0.6885 0.7454 0.375 0.8135 0.625 0.8135 0.625 0.9354 0.625 0.679 0.6885 0.679 0.6885 0.7454 0.625 0.7454 0.375 0.3146 0.625 0.3146 0.625 0.4365 0.625 0.5046 0.6885 0.5046 0.6885 0.5712 0.625 0.5712 0.6885 0.5046 0.8104 0.5046 0.8104 0.5712 0.6885 0.5712 0.8104 0.5046 0.875 0.5046 0.875 0.5712 0.8104 0.5712 0.3115 0.5046 0.375 0.5046 0.375 0.5712 0.3115 0.5712 0.375 0.5046 0.625 0.5046 0.625 0.5712 0.375 0.5712 0.625 0.5712 0.6885 0.5712 0.6885 0.573 0.625 0.573 0.8104 0.5712 0.875 0.5712 0.875 0.573 0.8104 0.573 0.3115 0.5712 0.375 0.5712 0.375 0.573 0.3115 0.573 0.375 0.5712 0.625 0.5712 0.625 0.573 0.375 0.573 0.625 0.6772 0.6885 0.6772 0.6885 0.679 0.625 0.679 0.8104 0.6772 0.875 0.6772 0.875 0.679 0.8104 0.679 0.3115 0.6772 0.375 0.6772 0.375 0.679 0.3115 0.679 0.375 0.6772 0.625 0.6772 0.625 0.679 0.375 0.679 0.375 0.6454 0.625 0.6454 0.625 0.6772 0.375 0.6772 0.3115 0.6454 0.375 0.6454 0.375 0.6772 0.3115 0.6772 0.8104 0.6454 0.875 0.6454 0.875 0.6772 0.8104 0.6772 0.6885 0.6454 0.8104 0.6454 0.8104 0.6772 0.6885 0.6772 0.625 0.6454 0.6885 0.6454 0.6885 0.6772 0.625 0.6772 0.625 0.573 0.6885 0.573 0.6885 0.6056 0.625 0.6056 0.6885 0.573 0.8104 0.573 0.8104 0.6056 0.6885 0.6056 0.8104 0.573 0.875 0.573 0.875 0.6056 0.8104 0.6056 0.3115 0.573 0.375 0.573 0.375 0.6056 0.3115 0.6056 0.375 0.573 0.625 0.573 0.625 0.6056 0.375 0.6056'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
        <transform DEF='Cube_001_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.636792 7.03658 0.090453'>
          <transform DEF='Cube_001_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material DEF='MA_Material' ambientIntensity='0' shininess='0.5' diffuseColor='1 1 1'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 -1 3 4 5 6 -1 7 8 9 -1 10 11 12 13 -1 14 15 16 17 -1 18 19 20 21 -1 22 23 24 25 -1 26 27 28 29 -1 30 31 32 -1 33 34 35 36 -1 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 -1 51 52 53 54 -1 55 56 57 -1 58 59 60 61 -1 62 63 64 65 -1 66 67 68 69 -1 70 71 72 73 -1 74 75 76 77 -1 78 79 80 81 -1 82 83 84 85 -1 86 87 88 89 -1' coordIndex='22 0 8 -1 2 1 4 5 -1 0 2 6 -1 8 0 3 9 -1 6 2 5 7 -1 3 0 6 7 -1 10 8 9 11 -1 23 22 8 10 -1 1 23 10 -1 1 10 11 4 -1 5 3 7 -1 13 12 24 25 -1 16 17 31 29 -1 4 11 21 -1 11 9 20 21 -1 9 3 20 -1 25 24 26 27 -1 15 13 25 27 -1 14 15 27 26 -1 12 14 26 24 -1 30 28 29 31 -1 18 16 29 28 -1 19 18 28 30 -1 17 19 30 31 -1'>
                  <coordinate DEF='coords_ME_Cube_001' point='-1 0.155115 1 1 0.155115 1 1 0.155115 -1 -1 -0.163559 1 1 -0.163559 1 1 -0.163559 -1 -1 0.133987 -0.749018 -1 -0.142993 -0.749018 -0.483032 0.133987 1 -0.483032 -0.142993 1 0.491634 0.133987 1 0.491634 -0.142993 1 -0.483032 0.430519 1 0.491634 0.430519 1 -0.483032 0.415692 1 0.491634 0.415692 1 -0.483032 -0.431638 1 0.491634 -0.431638 1 -0.483032 -0.417206 1 0.491634 -0.417206 1 -0.483032 -0.163559 1 0.491634 -0.163559 1 -0.483032 0.155115 1 0.491634 0.155115 1 -0.483032 0.430519 4.26136 0.491634 0.430519 4.26136 -0.483032 0.415692 4.26136 0.491634 0.415692 4.26136 -0.483032 -0.417206 4.59761 -0.483032 -0.431638 4.59761 0.491634 -0.417206 4.59761 0.491634 -0.431638 4.59761'></coordinate>
                  <textureCoordinate point='0.8104 0.6056 0.875 0.6083 0.8104 0.6083 0.375 0.6083 0.625 0.6083 0.625 0.6429 0.375 0.6429 0.3115 0.6083 0.375 0.6083 0.3115 0.6083 0.8104 0.6083 0.875 0.6083 0.875 0.6429 0.8104 0.6429 0.3115 0.6083 0.375 0.6083 0.375 0.6429 0.3115 0.6429 0.375 0.1071 0.375 0.1417 0.375 0.1417 0.375 0.1071 0.6885 0.6083 0.8104 0.6083 0.8104 0.6429 0.6885 0.6429 0.6885 0.6056 0.8104 0.6056 0.8104 0.6083 0.6885 0.6083 0.625 0.6056 0.6885 0.6056 0.6885 0.6083 0.625 0.6083 0.6885 0.6083 0.6885 0.6429 0.625 0.6429 0.375 0.6429 0.3115 0.6429 0.3115 0.6429 0.6885 0.5712 0.8104 0.5712 0.8104 0.5712 0.6885 0.5712 0.8104 0.679 0.6885 0.679 0.6885 0.679 0.8104 0.679 0.625 0.6429 0.6885 0.6429 0.6885 0.6454 0.6885 0.6429 0.8104 0.6429 0.8104 0.6454 0.6885 0.6454 0.8104 0.6429 0.875 0.6454 0.8104 0.6454 0.6885 0.5712 0.8104 0.5712 0.8104 0.573 0.6885 0.573 0.6885 0.573 0.6885 0.5712 0.6885 0.5712 0.6885 0.573 0.8104 0.573 0.6885 0.573 0.6885 0.573 0.8104 0.573 0.8104 0.5712 0.8104 0.573 0.8104 0.573 0.8104 0.5712 0.6885 0.6772 0.8104 0.6772 0.8104 0.679 0.6885 0.679 0.8104 0.6772 0.8104 0.679 0.8104 0.679 0.8104 0.6772 0.6885 0.6772 0.8104 0.6772 0.8104 0.6772 0.6885 0.6772 0.6885 0.679 0.6885 0.6772 0.6885 0.6772 0.6885 0.679'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
        <transform DEF='Cube_002_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.636792 7.03658 0.090453'>
          <transform DEF='Cube_002_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material USE='MA_Material'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1' coordIndex='15 9 5 12 -1 9 11 3 5 -1 11 10 2 3 -1 4 16 0 1 -1 13 4 6 14 -1 4 1 7 6 -1 1 0 8 7 -1 16 13 14 17 -1 18 15 12 19 -1 10 18 19 2 -1 3 2 19 5 -1 0 16 17 8 -1'>
                  <coordinate DEF='coords_ME_Cube_002' point='1 1 1 1 1 -1 1 -1 1 1 -1 -1 -1 1 1 -1 -1 1 -1 0.963346 1 1 0.963346 -1 1 0.963346 1 -1 -0.963577 1 1 -0.963577 1 1 -0.963577 -1 -0.483032 -1 1 -0.483032 1 1 -0.483032 0.963346 1 -0.483032 -0.963577 1 0.491634 1 1 0.491634 0.963346 1 0.491634 -0.963577 1 0.491634 -1 1'></coordinate>
                  <textureCoordinate point='0.8104 0.7454 0.875 0.7454 0.875 0.75 0.8104 0.75 0.3115 0.7454 0.375 0.7454 0.375 0.75 0.3115 0.75 0.375 0.7454 0.625 0.7454 0.625 0.75 0.375 0.75 0.375 0.4365 0.625 0.4365 0.625 0.5 0.375 0.5 0.8104 0.5 0.875 0.5 0.875 0.5046 0.8104 0.5046 0.3115 0.5 0.375 0.5 0.375 0.5046 0.3115 0.5046 0.375 0.5 0.625 0.5 0.625 0.5046 0.375 0.5046 0.6885 0.5 0.8104 0.5 0.8104 0.5046 0.6885 0.5046 0.6885 0.7454 0.8104 0.7454 0.8104 0.75 0.6885 0.75 0.625 0.7454 0.6885 0.7454 0.6885 0.75 0.625 0.75 0.375 0.75 0.625 0.75 0.625 0.8135 0.375 0.8135 0.625 0.5 0.6885 0.5 0.6885 0.5046 0.625 0.5046'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    </transform>
    <touchSensor id="wing2" enabled="false"/>
    </group>

  <!--WING 3-->
  <group>
  <transform DEF="WING3" translation="7.35 0.08 8" rotation="0 1 0 3.142">
  <transform onclick="loadwing3();" scale="0.2 0.16 0.24" rotation="0 0 1 -2.8">
  <transform DEF='Cube_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.636792 7.03658 0.090453'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material DEF='MA_Material_002' ambientIntensity='0' shininess='0.5' diffuseColor='1 0 0'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 -1 19 20 21 22 -1 23 24 25 -1 26 27 28 29 -1 30 31 32 33 -1 34 35 36 37 -1 38 39 40 41 -1 42 43 44 45 -1 46 47 48 49 -1 50 51 52 53 -1 54 55 56 57 -1 58 59 60 61 -1 62 63 64 65 -1 66 67 68 69 -1 70 71 72 73 -1 74 75 76 77 -1 78 79 80 81 -1 82 83 84 85 -1 86 87 88 89 -1 90 91 92 93 -1 94 95 96 97 -1 98 99 100 101 -1 102 103 104 105 -1 106 107 108 109 -1 110 111 112 113 -1 114 115 116 117 -1' coordIndex='33 34 12 13 -1 32 33 13 11 -1 35 32 11 17 -1 36 35 17 20 -1 1 21 14 -1 34 36 20 12 -1 0 15 18 -1 10 19 26 23 -1 19 16 25 26 -1 16 8 22 25 -1 8 9 24 22 -1 9 10 23 24 -1 23 26 30 28 -1 25 22 27 29 -1 22 24 31 27 -1 24 23 28 31 -1 39 41 36 34 -1 40 37 32 35 -1 37 38 33 32 -1 38 39 34 33 -1 7 6 39 38 -1 5 7 38 37 -1 42 5 37 40 -1 43 42 40 41 -1 6 43 41 39 -1 28 30 45 3 -1 30 29 44 45 -1 29 27 2 44 -1 27 31 4 2 -1 31 28 3 4 -1'>
                  <coordinate DEF='coords_ME_Cube' point='-1 1 1 -1 -1 1 -1 0.155115 1 1 0.155115 1 1 0.155115 -1 -1 -0.163559 1 1 -0.163559 1 1 -0.163559 -1 -1 0.963346 1 1 0.963346 -1 1 0.963346 1 -1 -0.963577 1 1 -0.963577 1 1 -0.963577 -1 -0.483032 -1 1 -0.483032 1 1 -0.483032 0.963346 1 -0.483032 -0.963577 1 0.491634 1 1 0.491634 0.963346 1 0.491634 -0.963577 1 0.491634 -1 1 -1 0.430519 1 1 0.430519 1 1 0.430519 -1 -0.483032 0.430519 1 0.491634 0.430519 1 -1 0.415692 1 1 0.415692 1 -0.483032 0.415692 1 0.491634 0.415692 1 1 0.415692 -1 -1 -0.431638 1 1 -0.431638 -1 1 -0.431638 1 -0.483032 -0.431638 1 0.491634 -0.431638 1 -1 -0.417206 1 1 -0.417206 -1 1 -0.417206 1 -0.483032 -0.417206 1 0.491634 -0.417206 1 -0.483032 -0.163559 1 0.491634 -0.163559 1 -0.483032 0.155115 1 0.491634 0.155115 1'></coordinate>
                  <textureCoordinate point='0.375 0.679 0.625 0.679 0.625 0.7454 0.375 0.7454 0.3115 0.679 0.375 0.679 0.375 0.7454 0.3115 0.7454 0.8104 0.679 0.875 0.679 0.875 0.7454 0.8104 0.7454 0.6885 0.679 0.8104 0.679 0.8104 0.7454 0.6885 0.7454 0.375 0.8135 0.625 0.8135 0.625 0.9354 0.625 0.679 0.6885 0.679 0.6885 0.7454 0.625 0.7454 0.375 0.3146 0.625 0.3146 0.625 0.4365 0.625 0.5046 0.6885 0.5046 0.6885 0.5712 0.625 0.5712 0.6885 0.5046 0.8104 0.5046 0.8104 0.5712 0.6885 0.5712 0.8104 0.5046 0.875 0.5046 0.875 0.5712 0.8104 0.5712 0.3115 0.5046 0.375 0.5046 0.375 0.5712 0.3115 0.5712 0.375 0.5046 0.625 0.5046 0.625 0.5712 0.375 0.5712 0.625 0.5712 0.6885 0.5712 0.6885 0.573 0.625 0.573 0.8104 0.5712 0.875 0.5712 0.875 0.573 0.8104 0.573 0.3115 0.5712 0.375 0.5712 0.375 0.573 0.3115 0.573 0.375 0.5712 0.625 0.5712 0.625 0.573 0.375 0.573 0.625 0.6772 0.6885 0.6772 0.6885 0.679 0.625 0.679 0.8104 0.6772 0.875 0.6772 0.875 0.679 0.8104 0.679 0.3115 0.6772 0.375 0.6772 0.375 0.679 0.3115 0.679 0.375 0.6772 0.625 0.6772 0.625 0.679 0.375 0.679 0.375 0.6454 0.625 0.6454 0.625 0.6772 0.375 0.6772 0.3115 0.6454 0.375 0.6454 0.375 0.6772 0.3115 0.6772 0.8104 0.6454 0.875 0.6454 0.875 0.6772 0.8104 0.6772 0.6885 0.6454 0.8104 0.6454 0.8104 0.6772 0.6885 0.6772 0.625 0.6454 0.6885 0.6454 0.6885 0.6772 0.625 0.6772 0.625 0.573 0.6885 0.573 0.6885 0.6056 0.625 0.6056 0.6885 0.573 0.8104 0.573 0.8104 0.6056 0.6885 0.6056 0.8104 0.573 0.875 0.573 0.875 0.6056 0.8104 0.6056 0.3115 0.573 0.375 0.573 0.375 0.6056 0.3115 0.6056 0.375 0.573 0.625 0.573 0.625 0.6056 0.375 0.6056'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
        <transform DEF='Cube_001_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.636792 7.03658 0.090453'>
          <transform DEF='Cube_001_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material DEF='MA_Material' ambientIntensity='0' shininess='0.5' diffuseColor='1 1 1'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 -1 3 4 5 6 -1 7 8 9 -1 10 11 12 13 -1 14 15 16 17 -1 18 19 20 21 -1 22 23 24 25 -1 26 27 28 29 -1 30 31 32 -1 33 34 35 36 -1 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 -1 51 52 53 54 -1 55 56 57 -1 58 59 60 61 -1 62 63 64 65 -1 66 67 68 69 -1 70 71 72 73 -1 74 75 76 77 -1 78 79 80 81 -1 82 83 84 85 -1 86 87 88 89 -1' coordIndex='22 0 8 -1 2 1 4 5 -1 0 2 6 -1 8 0 3 9 -1 6 2 5 7 -1 3 0 6 7 -1 10 8 9 11 -1 23 22 8 10 -1 1 23 10 -1 1 10 11 4 -1 5 3 7 -1 13 12 24 25 -1 16 17 31 29 -1 4 11 21 -1 11 9 20 21 -1 9 3 20 -1 25 24 26 27 -1 15 13 25 27 -1 14 15 27 26 -1 12 14 26 24 -1 30 28 29 31 -1 18 16 29 28 -1 19 18 28 30 -1 17 19 30 31 -1'>
                  <coordinate DEF='coords_ME_Cube_001' point='-1 0.155115 1 1 0.155115 1 1 0.155115 -1 -1 -0.163559 1 1 -0.163559 1 1 -0.163559 -1 -1 0.133987 -0.749018 -1 -0.142993 -0.749018 -0.483032 0.133987 1 -0.483032 -0.142993 1 0.491634 0.133987 1 0.491634 -0.142993 1 -0.483032 0.430519 1 0.491634 0.430519 1 -0.483032 0.415692 1 0.491634 0.415692 1 -0.483032 -0.431638 1 0.491634 -0.431638 1 -0.483032 -0.417206 1 0.491634 -0.417206 1 -0.483032 -0.163559 1 0.491634 -0.163559 1 -0.483032 0.155115 1 0.491634 0.155115 1 -0.483032 0.430519 4.26136 0.491634 0.430519 4.26136 -0.483032 0.415692 4.26136 0.491634 0.415692 4.26136 -0.483032 -0.417206 4.59761 -0.483032 -0.431638 4.59761 0.491634 -0.417206 4.59761 0.491634 -0.431638 4.59761'></coordinate>
                  <textureCoordinate point='0.8104 0.6056 0.875 0.6083 0.8104 0.6083 0.375 0.6083 0.625 0.6083 0.625 0.6429 0.375 0.6429 0.3115 0.6083 0.375 0.6083 0.3115 0.6083 0.8104 0.6083 0.875 0.6083 0.875 0.6429 0.8104 0.6429 0.3115 0.6083 0.375 0.6083 0.375 0.6429 0.3115 0.6429 0.375 0.1071 0.375 0.1417 0.375 0.1417 0.375 0.1071 0.6885 0.6083 0.8104 0.6083 0.8104 0.6429 0.6885 0.6429 0.6885 0.6056 0.8104 0.6056 0.8104 0.6083 0.6885 0.6083 0.625 0.6056 0.6885 0.6056 0.6885 0.6083 0.625 0.6083 0.6885 0.6083 0.6885 0.6429 0.625 0.6429 0.375 0.6429 0.3115 0.6429 0.3115 0.6429 0.6885 0.5712 0.8104 0.5712 0.8104 0.5712 0.6885 0.5712 0.8104 0.679 0.6885 0.679 0.6885 0.679 0.8104 0.679 0.625 0.6429 0.6885 0.6429 0.6885 0.6454 0.6885 0.6429 0.8104 0.6429 0.8104 0.6454 0.6885 0.6454 0.8104 0.6429 0.875 0.6454 0.8104 0.6454 0.6885 0.5712 0.8104 0.5712 0.8104 0.573 0.6885 0.573 0.6885 0.573 0.6885 0.5712 0.6885 0.5712 0.6885 0.573 0.8104 0.573 0.6885 0.573 0.6885 0.573 0.8104 0.573 0.8104 0.5712 0.8104 0.573 0.8104 0.573 0.8104 0.5712 0.6885 0.6772 0.8104 0.6772 0.8104 0.679 0.6885 0.679 0.8104 0.6772 0.8104 0.679 0.8104 0.679 0.8104 0.6772 0.6885 0.6772 0.8104 0.6772 0.8104 0.6772 0.6885 0.6772 0.6885 0.679 0.6885 0.6772 0.6885 0.6772 0.6885 0.679'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
        <transform DEF='Cube_002_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.636792 7.03658 0.090453'>
          <transform DEF='Cube_002_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material USE='MA_Material'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1' coordIndex='15 9 5 12 -1 9 11 3 5 -1 11 10 2 3 -1 4 16 0 1 -1 13 4 6 14 -1 4 1 7 6 -1 1 0 8 7 -1 16 13 14 17 -1 18 15 12 19 -1 10 18 19 2 -1 3 2 19 5 -1 0 16 17 8 -1'>
                  <coordinate DEF='coords_ME_Cube_002' point='1 1 1 1 1 -1 1 -1 1 1 -1 -1 -1 1 1 -1 -1 1 -1 0.963346 1 1 0.963346 -1 1 0.963346 1 -1 -0.963577 1 1 -0.963577 1 1 -0.963577 -1 -0.483032 -1 1 -0.483032 1 1 -0.483032 0.963346 1 -0.483032 -0.963577 1 0.491634 1 1 0.491634 0.963346 1 0.491634 -0.963577 1 0.491634 -1 1'></coordinate>
                  <textureCoordinate point='0.8104 0.7454 0.875 0.7454 0.875 0.75 0.8104 0.75 0.3115 0.7454 0.375 0.7454 0.375 0.75 0.3115 0.75 0.375 0.7454 0.625 0.7454 0.625 0.75 0.375 0.75 0.375 0.4365 0.625 0.4365 0.625 0.5 0.375 0.5 0.8104 0.5 0.875 0.5 0.875 0.5046 0.8104 0.5046 0.3115 0.5 0.375 0.5 0.375 0.5046 0.3115 0.5046 0.375 0.5 0.625 0.5 0.625 0.5046 0.375 0.5046 0.6885 0.5 0.8104 0.5 0.8104 0.5046 0.6885 0.5046 0.6885 0.7454 0.8104 0.7454 0.8104 0.75 0.6885 0.75 0.625 0.7454 0.6885 0.7454 0.6885 0.75 0.625 0.75 0.375 0.75 0.625 0.75 0.625 0.8135 0.375 0.8135 0.625 0.5 0.6885 0.5 0.6885 0.5046 0.625 0.5046'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    </transform>
    <touchSensor id="wing3" enabled="false"/>
    </group>

  <!--WING 4-->
  <group>
  <transform DEF="WING4" translation="8.65 0.08 8">
  <transform onclick="loadwing4();" scale="0.2 0.16 0.24" rotation="0 0 1 -2.8">
  <transform DEF='Cube_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.636792 7.03658 0.090453'>
          <transform DEF='Cube_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material DEF='MA_Material_002' ambientIntensity='0' shininess='0.5' diffuseColor='1 0 0'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 -1 19 20 21 22 -1 23 24 25 -1 26 27 28 29 -1 30 31 32 33 -1 34 35 36 37 -1 38 39 40 41 -1 42 43 44 45 -1 46 47 48 49 -1 50 51 52 53 -1 54 55 56 57 -1 58 59 60 61 -1 62 63 64 65 -1 66 67 68 69 -1 70 71 72 73 -1 74 75 76 77 -1 78 79 80 81 -1 82 83 84 85 -1 86 87 88 89 -1 90 91 92 93 -1 94 95 96 97 -1 98 99 100 101 -1 102 103 104 105 -1 106 107 108 109 -1 110 111 112 113 -1 114 115 116 117 -1' coordIndex='33 34 12 13 -1 32 33 13 11 -1 35 32 11 17 -1 36 35 17 20 -1 1 21 14 -1 34 36 20 12 -1 0 15 18 -1 10 19 26 23 -1 19 16 25 26 -1 16 8 22 25 -1 8 9 24 22 -1 9 10 23 24 -1 23 26 30 28 -1 25 22 27 29 -1 22 24 31 27 -1 24 23 28 31 -1 39 41 36 34 -1 40 37 32 35 -1 37 38 33 32 -1 38 39 34 33 -1 7 6 39 38 -1 5 7 38 37 -1 42 5 37 40 -1 43 42 40 41 -1 6 43 41 39 -1 28 30 45 3 -1 30 29 44 45 -1 29 27 2 44 -1 27 31 4 2 -1 31 28 3 4 -1'>
                  <coordinate DEF='coords_ME_Cube' point='-1 1 1 -1 -1 1 -1 0.155115 1 1 0.155115 1 1 0.155115 -1 -1 -0.163559 1 1 -0.163559 1 1 -0.163559 -1 -1 0.963346 1 1 0.963346 -1 1 0.963346 1 -1 -0.963577 1 1 -0.963577 1 1 -0.963577 -1 -0.483032 -1 1 -0.483032 1 1 -0.483032 0.963346 1 -0.483032 -0.963577 1 0.491634 1 1 0.491634 0.963346 1 0.491634 -0.963577 1 0.491634 -1 1 -1 0.430519 1 1 0.430519 1 1 0.430519 -1 -0.483032 0.430519 1 0.491634 0.430519 1 -1 0.415692 1 1 0.415692 1 -0.483032 0.415692 1 0.491634 0.415692 1 1 0.415692 -1 -1 -0.431638 1 1 -0.431638 -1 1 -0.431638 1 -0.483032 -0.431638 1 0.491634 -0.431638 1 -1 -0.417206 1 1 -0.417206 -1 1 -0.417206 1 -0.483032 -0.417206 1 0.491634 -0.417206 1 -0.483032 -0.163559 1 0.491634 -0.163559 1 -0.483032 0.155115 1 0.491634 0.155115 1'></coordinate>
                  <textureCoordinate point='0.375 0.679 0.625 0.679 0.625 0.7454 0.375 0.7454 0.3115 0.679 0.375 0.679 0.375 0.7454 0.3115 0.7454 0.8104 0.679 0.875 0.679 0.875 0.7454 0.8104 0.7454 0.6885 0.679 0.8104 0.679 0.8104 0.7454 0.6885 0.7454 0.375 0.8135 0.625 0.8135 0.625 0.9354 0.625 0.679 0.6885 0.679 0.6885 0.7454 0.625 0.7454 0.375 0.3146 0.625 0.3146 0.625 0.4365 0.625 0.5046 0.6885 0.5046 0.6885 0.5712 0.625 0.5712 0.6885 0.5046 0.8104 0.5046 0.8104 0.5712 0.6885 0.5712 0.8104 0.5046 0.875 0.5046 0.875 0.5712 0.8104 0.5712 0.3115 0.5046 0.375 0.5046 0.375 0.5712 0.3115 0.5712 0.375 0.5046 0.625 0.5046 0.625 0.5712 0.375 0.5712 0.625 0.5712 0.6885 0.5712 0.6885 0.573 0.625 0.573 0.8104 0.5712 0.875 0.5712 0.875 0.573 0.8104 0.573 0.3115 0.5712 0.375 0.5712 0.375 0.573 0.3115 0.573 0.375 0.5712 0.625 0.5712 0.625 0.573 0.375 0.573 0.625 0.6772 0.6885 0.6772 0.6885 0.679 0.625 0.679 0.8104 0.6772 0.875 0.6772 0.875 0.679 0.8104 0.679 0.3115 0.6772 0.375 0.6772 0.375 0.679 0.3115 0.679 0.375 0.6772 0.625 0.6772 0.625 0.679 0.375 0.679 0.375 0.6454 0.625 0.6454 0.625 0.6772 0.375 0.6772 0.3115 0.6454 0.375 0.6454 0.375 0.6772 0.3115 0.6772 0.8104 0.6454 0.875 0.6454 0.875 0.6772 0.8104 0.6772 0.6885 0.6454 0.8104 0.6454 0.8104 0.6772 0.6885 0.6772 0.625 0.6454 0.6885 0.6454 0.6885 0.6772 0.625 0.6772 0.625 0.573 0.6885 0.573 0.6885 0.6056 0.625 0.6056 0.6885 0.573 0.8104 0.573 0.8104 0.6056 0.6885 0.6056 0.8104 0.573 0.875 0.573 0.875 0.6056 0.8104 0.6056 0.3115 0.573 0.375 0.573 0.375 0.6056 0.3115 0.6056 0.375 0.573 0.625 0.573 0.625 0.6056 0.375 0.6056'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
        <transform DEF='Cube_001_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.636792 7.03658 0.090453'>
          <transform DEF='Cube_001_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material DEF='MA_Material' ambientIntensity='0' shininess='0.5' diffuseColor='1 1 1'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 -1 3 4 5 6 -1 7 8 9 -1 10 11 12 13 -1 14 15 16 17 -1 18 19 20 21 -1 22 23 24 25 -1 26 27 28 29 -1 30 31 32 -1 33 34 35 36 -1 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 -1 51 52 53 54 -1 55 56 57 -1 58 59 60 61 -1 62 63 64 65 -1 66 67 68 69 -1 70 71 72 73 -1 74 75 76 77 -1 78 79 80 81 -1 82 83 84 85 -1 86 87 88 89 -1' coordIndex='22 0 8 -1 2 1 4 5 -1 0 2 6 -1 8 0 3 9 -1 6 2 5 7 -1 3 0 6 7 -1 10 8 9 11 -1 23 22 8 10 -1 1 23 10 -1 1 10 11 4 -1 5 3 7 -1 13 12 24 25 -1 16 17 31 29 -1 4 11 21 -1 11 9 20 21 -1 9 3 20 -1 25 24 26 27 -1 15 13 25 27 -1 14 15 27 26 -1 12 14 26 24 -1 30 28 29 31 -1 18 16 29 28 -1 19 18 28 30 -1 17 19 30 31 -1'>
                  <coordinate DEF='coords_ME_Cube_001' point='-1 0.155115 1 1 0.155115 1 1 0.155115 -1 -1 -0.163559 1 1 -0.163559 1 1 -0.163559 -1 -1 0.133987 -0.749018 -1 -0.142993 -0.749018 -0.483032 0.133987 1 -0.483032 -0.142993 1 0.491634 0.133987 1 0.491634 -0.142993 1 -0.483032 0.430519 1 0.491634 0.430519 1 -0.483032 0.415692 1 0.491634 0.415692 1 -0.483032 -0.431638 1 0.491634 -0.431638 1 -0.483032 -0.417206 1 0.491634 -0.417206 1 -0.483032 -0.163559 1 0.491634 -0.163559 1 -0.483032 0.155115 1 0.491634 0.155115 1 -0.483032 0.430519 4.26136 0.491634 0.430519 4.26136 -0.483032 0.415692 4.26136 0.491634 0.415692 4.26136 -0.483032 -0.417206 4.59761 -0.483032 -0.431638 4.59761 0.491634 -0.417206 4.59761 0.491634 -0.431638 4.59761'></coordinate>
                  <textureCoordinate point='0.8104 0.6056 0.875 0.6083 0.8104 0.6083 0.375 0.6083 0.625 0.6083 0.625 0.6429 0.375 0.6429 0.3115 0.6083 0.375 0.6083 0.3115 0.6083 0.8104 0.6083 0.875 0.6083 0.875 0.6429 0.8104 0.6429 0.3115 0.6083 0.375 0.6083 0.375 0.6429 0.3115 0.6429 0.375 0.1071 0.375 0.1417 0.375 0.1417 0.375 0.1071 0.6885 0.6083 0.8104 0.6083 0.8104 0.6429 0.6885 0.6429 0.6885 0.6056 0.8104 0.6056 0.8104 0.6083 0.6885 0.6083 0.625 0.6056 0.6885 0.6056 0.6885 0.6083 0.625 0.6083 0.6885 0.6083 0.6885 0.6429 0.625 0.6429 0.375 0.6429 0.3115 0.6429 0.3115 0.6429 0.6885 0.5712 0.8104 0.5712 0.8104 0.5712 0.6885 0.5712 0.8104 0.679 0.6885 0.679 0.6885 0.679 0.8104 0.679 0.625 0.6429 0.6885 0.6429 0.6885 0.6454 0.6885 0.6429 0.8104 0.6429 0.8104 0.6454 0.6885 0.6454 0.8104 0.6429 0.875 0.6454 0.8104 0.6454 0.6885 0.5712 0.8104 0.5712 0.8104 0.573 0.6885 0.573 0.6885 0.573 0.6885 0.5712 0.6885 0.5712 0.6885 0.573 0.8104 0.573 0.6885 0.573 0.6885 0.573 0.8104 0.573 0.8104 0.5712 0.8104 0.573 0.8104 0.573 0.8104 0.5712 0.6885 0.6772 0.8104 0.6772 0.8104 0.679 0.6885 0.679 0.8104 0.6772 0.8104 0.679 0.8104 0.679 0.8104 0.6772 0.6885 0.6772 0.8104 0.6772 0.8104 0.6772 0.6885 0.6772 0.6885 0.679 0.6885 0.6772 0.6885 0.6772 0.6885 0.679'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
        <transform DEF='Cube_002_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.636792 7.03658 0.090453'>
          <transform DEF='Cube_002_ifs_TRANSFORM'>
              <shape>
                <appearance>
                  <material USE='MA_Material'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1' coordIndex='15 9 5 12 -1 9 11 3 5 -1 11 10 2 3 -1 4 16 0 1 -1 13 4 6 14 -1 4 1 7 6 -1 1 0 8 7 -1 16 13 14 17 -1 18 15 12 19 -1 10 18 19 2 -1 3 2 19 5 -1 0 16 17 8 -1'>
                  <coordinate DEF='coords_ME_Cube_002' point='1 1 1 1 1 -1 1 -1 1 1 -1 -1 -1 1 1 -1 -1 1 -1 0.963346 1 1 0.963346 -1 1 0.963346 1 -1 -0.963577 1 1 -0.963577 1 1 -0.963577 -1 -0.483032 -1 1 -0.483032 1 1 -0.483032 0.963346 1 -0.483032 -0.963577 1 0.491634 1 1 0.491634 0.963346 1 0.491634 -0.963577 1 0.491634 -1 1'></coordinate>
                  <textureCoordinate point='0.8104 0.7454 0.875 0.7454 0.875 0.75 0.8104 0.75 0.3115 0.7454 0.375 0.7454 0.375 0.75 0.3115 0.75 0.375 0.7454 0.625 0.7454 0.625 0.75 0.375 0.75 0.375 0.4365 0.625 0.4365 0.625 0.5 0.375 0.5 0.8104 0.5 0.875 0.5 0.875 0.5046 0.8104 0.5046 0.3115 0.5 0.375 0.5 0.375 0.5046 0.3115 0.5046 0.375 0.5 0.625 0.5 0.625 0.5046 0.375 0.5046 0.6885 0.5 0.8104 0.5 0.8104 0.5046 0.6885 0.5046 0.6885 0.7454 0.8104 0.7454 0.8104 0.75 0.6885 0.75 0.625 0.7454 0.6885 0.7454 0.6885 0.75 0.625 0.75 0.375 0.75 0.625 0.75 0.625 0.8135 0.375 0.8135 0.625 0.5 0.6885 0.5 0.6885 0.5046 0.625 0.5046'></textureCoordinate>
                </indexedFaceSet>
              </shape>
          </transform>
        </transform>
      </transform>
    </transform>
     <touchSensor id="wing4"/>
    </group>

    <!--battery1-->
    <group>
    <transform DEF="bat1" translation="-3 0 0">
    <transform translation="7.5 -0.79 11.58">
     <shape onclick="loadBattery1()";>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.4 0.17 0.2"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.74 11.58">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <box size="0.45 0.03 0.15"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.705 11.58">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="0.1 0.01 0.1"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.705 11.58">
     <shape>
      <appearance>
        <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height='0.03' radius='0.03'/>
    </shape>
  </transform>
  <touchSensor id="battery1" enabled="true"/>
  </transform>
  <Sound>
    <AudioClip id="e10" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/7/7e/Error_message.wav"/>
    </Sound>
  </group>

  <!--battery 2-->
    <group>
    <transform DEF="bat2" translation="-2.4 0 0">
    <transform translation="7.5 -0.79 11.58">
     <shape onclick="loadBattery2()";>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.4 0.17 0.2"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.74 11.58">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <box size="0.45 0.03 0.15"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.705 11.58">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="0.1 0.01 0.1"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.705 11.58">
     <shape>
      <appearance>
        <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height='0.03' radius='0.03'/>
    </shape>
  </transform>
  <touchSensor id="battery2" enabled="false"/>
  </transform>
  </group>

  <!--battery 3-->
    <group>
    <transform DEF="bat3" translation="-1.8 0 0">
    <transform translation="7.5 -0.79 11.58">
     <shape onclick="loadBattery3()";>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.4 0.17 0.2"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.74 11.58">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <box size="0.45 0.03 0.15"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.705 11.58">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="0.1 0.01 0.1"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.705 11.58">
     <shape>
      <appearance>
        <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height='0.03' radius='0.03'/>
    </shape>
  </transform>
  <touchSensor id="battery3" enabled="true"/>
  </transform>
  <Sound>
    <AudioClip id="e12" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/7/7e/Error_message.wav"/>
    </Sound>
  </group>

  <!--battery 4-->
    <group>
    <transform DEF="bat4" translation="-1.2 0 0">
    <transform translation="7.5 -0.79 11.58">
     <shape onclick="loadBattery4()";>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.4 0.17 0.2"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.74 11.58">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <box size="0.45 0.03 0.15"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.705 11.58">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="0.1 0.01 0.1"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.705 11.58">
     <shape>
      <appearance>
        <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height='0.03' radius='0.03'/>
    </shape>
  </transform>
  <touchSensor id="battery4" enabled="false"/>
  </transform>
  </group>
  <!--battery 5-->
    <group>
    <transform DEF="bat5" translation="-0.6 0 0">
    <transform translation="7.5 -0.79 11.58">
     <shape onclick="loadBattery5()";>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.4 0.17 0.2"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.74 11.58">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <box size="0.45 0.03 0.15"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.705 11.58">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="0.1 0.01 0.1"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.705 11.58">
     <shape>
      <appearance>
        <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height='0.03' radius='0.03'/>
    </shape>
  </transform>
  <touchSensor id="battery5" enabled="true"/>
  </transform>
  <Sound>
    <AudioClip id="e14" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/7/7e/Error_message.wav"/>
    </Sound>
  </group>
  <!--battery 6-->
    <group>
    <transform DEF="bat6" translation="0 0 0">
    <transform translation="7.5 -0.79 11.58">
     <shape onclick="loadBattery6()";>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.4 0.17 0.2"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.74 11.58">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <box size="0.45 0.03 0.15"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.705 11.58">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="0.1 0.01 0.1"></box>
     </shape>
    </transform>
    <transform translation="7.5 -0.705 11.58">
     <shape>
      <appearance>
        <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height='0.03' radius='0.03'/>
    </shape>
  </transform>
  <touchSensor id="battery6" enabled="false"/>
  </transform>
  </group>

  <!--Nose 1-->
  <group>
  <transform DEF="nose1" translation="3.3 -0.3 11.4" scale="0.386 0.34 0.36">
  <transform DEF='Cube_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.656532 0.588892 0.239477'>
          <transform DEF='Cube_ifs_TRANSFORM'>
            <group DEF='group_ME_Cube_001'>
              <shape onclick="loadNose1();">
                <appearance>
                  <material DEF='MA_Material_002' diffuseColor="1 1 1"></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 51 -1 52 53 54 55 -1 56 57 58 59 -1 60 61 62 63 -1 64 65 66 67 -1 68 69 70 71 -1 72 73 74 75 -1 76 77 78 79 -1 80 81 82 83 -1 84 85 86 87 -1 88 89 90 91 -1 92 93 94 95 -1 96 97 98 99 -1 100 101 102 103 -1 104 105 106 107 -1 108 109 110 111 -1 112 113 114 115 -1 116 117 118 119 -1 120 121 122 123 -1 124 125 126 127 -1 128 129 130 131 -1 132 133 134 135 -1 136 137 138 139 -1 140 141 142 143 -1 144 145 146 147 -1 148 149 150 151 -1 152 153 154 155 -1 156 157 158 159 -1 160 161 162 163 -1 164 165 166 167 -1 168 169 170 171 -1 172 173 174 175 -1 176 177 178 179 -1 180 181 182 183 -1 184 185 186 187 -1 188 189 190 191 -1 192 193 194 195 -1 196 197 198 199 -1 200 201 202 203 -1 204 205 206 207 -1 208 209 210 211 -1 212 213 214 215 -1 216 217 218 219 -1 220 221 222 223 -1 224 225 226 227 -1 228 229 230 231 -1 232 233 234 235 -1 236 237 238 239 -1 240 241 242 243 -1 244 245 246 247 -1 248 249 250 251 -1 252 253 254 255 -1 256 257 258 259 -1 260 261 262 263 -1 264 265 266 267 -1 268 269 270 271 -1 272 273 274 275 -1 276 277 278 279 -1 280 281 282 283 -1 284 285 286 287 -1 288 289 290 291 -1 292 293 294 295 -1 296 297 298 299 -1 300 301 302 303 -1 304 305 306 307 -1 308 309 310 311 -1 312 313 314 315 -1 316 317 318 319 -1 320 321 322 323 -1 324 325 326 327 -1' coordIndex='37 5 9 38 -1 77 25 3 70 -1 42 1 5 37 -1 71 5 1 69 -1 70 3 7 64 -1 31 15 11 29 -1 72 9 5 71 -1 53 10 6 51 -1 24 2 6 26 -1 35 23 15 31 -1 73 13 9 72 -1 55 14 10 53 -1 26 6 10 28 -1 79 47 18 67 -1 74 19 13 73 -1 59 21 14 55 -1 45 12 8 44 -1 67 18 19 74 -1 58 20 21 59 -1 40 16 17 46 -1 34 22 23 35 -1 46 17 12 45 -1 21 33 30 14 -1 47 34 35 41 -1 20 32 33 21 -1 14 30 28 10 -1 75 22 34 76 -1 43 26 28 44 -1 41 35 31 39 -1 36 24 26 43 -1 39 31 29 38 -1 3 25 27 7 -1 78 42 25 77 -1 7 27 29 11 -1 69 1 42 78 -1 13 39 38 9 -1 0 36 43 4 -1 19 41 39 13 -1 4 43 44 8 -1 18 47 41 19 -1 33 46 45 30 -1 32 40 46 33 -1 30 45 44 28 -1 76 34 47 79 -1 25 42 37 27 -1 27 37 38 29 -1 32 60 63 40 -1 0 48 62 36 -1 36 62 61 24 -1 20 58 60 32 -1 75 58 59 68 -1 16 56 57 17 -1 68 59 55 66 -1 17 57 54 12 -1 40 63 56 16 -1 66 55 53 65 -1 12 54 52 8 -1 65 53 51 64 -1 8 52 50 4 -1 2 49 51 6 -1 4 50 48 0 -1 24 61 49 2 -1 11 65 64 7 -1 15 66 65 11 -1 23 68 66 15 -1 22 75 68 23 -1 60 76 79 63 -1 48 69 78 62 -1 78 77 80 82 -1 58 75 76 60 -1 56 67 74 57 -1 57 74 73 54 -1 63 79 67 56 -1 54 73 72 52 -1 52 72 71 50 -1 49 70 64 51 -1 50 71 69 48 -1 61 77 70 49 -1 83 82 80 81 -1 77 61 81 80 -1 61 62 83 81 -1 62 78 82 83 -1'>
                  <coordinate DEF='coords_ME_Cube_001' point='-1 1 -1.56294 -1 1 1.56294 1 1 -1.56294 1 1 1.56294 -1 -0.527814 -1.13291 -1 -0.527814 1.13291 1 -0.527814 -1.13291 1 -0.527814 1.13291 -0.684571 -0.838042 -0.72743 -0.683551 -0.838119 0.729115 0.684571 -0.838042 -0.72743 0.683551 -0.838119 0.729115 -0.394546 -0.98141 -0.40758 -0.403963 -0.997412 0.411939 0.394546 -0.98141 -0.40758 0.403963 -0.997412 0.41194 -0.04517 -1.03689 -0.0531 -0.226653 -1.0206 -0.233728 -0.04885 -1.04553 0.038213 -0.225856 -1.0106 0.217766 0.04517 -1.03689 -0.0531 0.226653 -1.0206 -0.233727 0.04885 -1.04553 0.038213 0.225856 -1.0106 0.217766 0.887006 1 -1.56294 0.887006 1 1.56294 0.887006 -0.527814 -1.13291 0.887006 -0.527814 1.13291 0.607218 -0.838042 -0.72743 0.606313 -0.838119 0.729115 0.349965 -0.98141 -0.40758 0.358317 -0.997412 0.41194 0.040066 -1.03689 -0.0531 0.201043 -1.0206 -0.233727 0.043331 -1.04553 0.038213 0.200335 -1.0106 0.217766 -0.881356 1 -1.56294 -0.881356 -0.527814 1.13291 -0.602451 -0.838119 0.729115 -0.356035 -0.997412 0.411939 -0.039811 -1.03689 -0.0531 -0.199059 -1.0106 0.217766 -0.881356 1 1.56294 -0.881356 -0.527814 -1.13291 -0.603351 -0.838042 -0.72743 -0.347736 -0.98141 -0.40758 -0.199762 -1.0206 -0.233728 -0.043055 -1.04553 0.038213 -1 1 -1.3285 1 1 -1.3285 -1 -0.527814 -0.96297 1 -0.527814 -0.96297 -0.684494 -0.838048 -0.618189 0.684494 -0.838048 -0.618189 -0.395253 -0.98261 -0.346116 0.395253 -0.98261 -0.346116 -0.045446 -1.03754 -0.046252 -0.226593 -1.01985 -0.199866 0.045446 -1.03754 -0.046252 0.226593 -1.01985 -0.199866 0.040311 -1.03754 -0.046252 0.887006 1 -1.3285 -0.881356 1 -1.3285 -0.040054 -1.03754 -0.046252 1 -0.527814 0.941347 0.683637 -0.838113 0.605974 0.403167 -0.996059 0.342655 -0.048539 -1.0448 0.030493 0.225923 -1.01145 0.179595 -1 1 1.29867 1 1 1.29867 -1 -0.527814 0.941347 -0.683637 -0.838113 0.605974 -0.403167 -0.996059 0.342655 -0.225923 -1.01145 0.179595 0.048539 -1.0448 0.030493 0.043055 -1.0448 0.030493 0.887006 1 1.29867 -0.881356 1 1.29867 -0.04278 -1.0448 0.030493 0.887006 0.216208 1.29867 0.887006 0.216208 -1.3285 -0.881356 0.216208 1.29867 -0.881356 0.216208 -1.3285'></coordinate>
                  <textureCoordinate point='0.8602 0.691 0.875 0.691 0.8354 0.7298 0.8253 0.7298 0.6039 0.4859 0.625 0.4859 0.625 0.5 0.6039 0.5 0.8602 0.5 0.875 0.5 0.875 0.691 0.8602 0.691 0.6039 0.059 0.625 0.059 0.625 0.25 0.6039 0.25 0.6039 0.5 0.625 0.5 0.625 0.691 0.6039 0.691 0.5427 0.8372 0.5427 0.8323 0.5648 0.8102 0.5648 0.8175 0.571 0.9604 0.5854 0.9604 0.625 1 0.6039 1 0.4274 0.7693 0.4146 0.7693 0.375 0.691 0.3938 0.691 0.3609 0.5 0.375 0.5 0.375 0.691 0.3609 0.691 0.5253 0.8526 0.5253 0.8497 0.5427 0.8323 0.5427 0.8372 0.5404 0.9236 0.5486 0.9236 0.5854 0.9604 0.571 0.9604 0.4586 0.8205 0.4514 0.8205 0.4146 0.7693 0.4274 0.7693 0.3609 0.691 0.375 0.691 0.3354 0.7298 0.3258 0.7298 0.5046 0.8799 0.5056 0.8799 0.5056 0.8806 0.5046 0.8806 0.5226 0.9022 0.5272 0.9022 0.5486 0.9236 0.5404 0.9236 0.4768 0.8458 0.4728 0.8458 0.4514 0.8205 0.4586 0.8205 0.4573 0.9126 0.4573 0.9177 0.4352 0.9398 0.4352 0.9321 0.5046 0.8806 0.5056 0.8806 0.5272 0.9022 0.5226 0.9022 0.4952 0.8694 0.4944 0.8694 0.4728 0.8458 0.4768 0.8458 0.4944 0.8799 0.4944 0.8806 0.4747 0.9003 0.4747 0.8973 0.5056 0.87 0.5056 0.8694 0.5253 0.8497 0.5253 0.8526 0.4747 0.8973 0.4747 0.9003 0.4573 0.9177 0.4573 0.9126 0.4747 0.8497 0.4747 0.8526 0.4573 0.8372 0.4573 0.8323 0.5056 0.8799 0.5056 0.87 0.5253 0.8526 0.5253 0.8973 0.4944 0.8694 0.4944 0.87 0.4747 0.8526 0.4747 0.8497 0.4573 0.8323 0.4573 0.8372 0.4352 0.8175 0.4352 0.8102 0.5046 0.8694 0.5056 0.8694 0.5056 0.87 0.5046 0.87 0.1398 0.691 0.3609 0.691 0.3258 0.7298 0.1747 0.7298 0.5253 0.8973 0.5253 0.8526 0.5427 0.8372 0.5427 0.9126 0.1398 0.5 0.3609 0.5 0.3609 0.691 0.1398 0.691 0.5427 0.9126 0.5427 0.8372 0.5648 0.8175 0.5648 0.9321 0.625 0.5 0.6391 0.5 0.6391 0.691 0.625 0.691 0.6039 0.2648 0.625 0.2648 0.625 0.4859 0.6039 0.4859 0.625 0.691 0.6391 0.691 0.6742 0.7298 0.6646 0.7298 0.6039 0.25 0.625 0.25 0.625 0.2648 0.6039 0.2648 0.5427 0.9177 0.5427 0.9126 0.5648 0.9321 0.5648 0.9398 0.125 0.5 0.1398 0.5 0.1398 0.691 0.125 0.691 0.5253 0.9003 0.5253 0.8973 0.5427 0.9126 0.5427 0.9177 0.125 0.691 0.1398 0.691 0.1747 0.7298 0.1646 0.7298 0.5056 0.8806 0.5056 0.8799 0.5253 0.8973 0.5253 0.9003 0.4747 0.8526 0.4747 0.8973 0.4573 0.9126 0.4573 0.8372 0.4944 0.87 0.4944 0.8799 0.4747 0.8973 0.4747 0.8526 0.4573 0.8372 0.4573 0.9126 0.4352 0.9321 0.4352 0.8175 0.5046 0.87 0.5056 0.87 0.5056 0.8799 0.5046 0.8799 0.6391 0.5 0.8602 0.5 0.8602 0.691 0.6391 0.691 0.6391 0.691 0.8602 0.691 0.8253 0.7298 0.6742 0.7298 0.4944 0.87 0.4952 0.87 0.4952 0.8799 0.4944 0.8799 0.375 0.25 0.3938 0.25 0.3938 0.2648 0.375 0.2648 0.375 0.2648 0.3938 0.2648 0.3938 0.4859 0.375 0.4859 0.4944 0.8694 0.4952 0.8694 0.4952 0.87 0.4944 0.87 0.5046 0.8694 0.4952 0.8694 0.4768 0.8458 0.5226 0.8458 0.4944 0.8806 0.4952 0.8806 0.4768 0.9022 0.4728 0.9022 0.5226 0.8458 0.4768 0.8458 0.4586 0.8205 0.5404 0.8205 0.4728 0.9022 0.4768 0.9022 0.4586 0.9236 0.4514 0.9236 0.4944 0.8799 0.4952 0.8799 0.4952 0.8806 0.4944 0.8806 0.5404 0.8205 0.4586 0.8205 0.4274 0.7693 0.571 0.7693 0.4514 0.9236 0.4586 0.9236 0.4274 0.9604 0.4146 0.9604 0.571 0.7693 0.4274 0.7693 0.3938 0.691 0.6039 0.691 0.4146 0.9604 0.4274 0.9604 0.3938 1 0.375 1 0.375 0.5 0.3938 0.5 0.3938 0.691 0.375 0.691 0.375 0.059 0.3938 0.059 0.3938 0.25 0.375 0.25 0.375 0.4859 0.3938 0.4859 0.3938 0.5 0.375 0.5 0.5854 0.7693 0.571 0.7693 0.6039 0.691 0.625 0.691 0.5486 0.8205 0.5404 0.8205 0.571 0.7693 0.5854 0.7693 0.5272 0.8458 0.5226 0.8458 0.5404 0.8205 0.5486 0.8205 0.5056 0.8694 0.5046 0.8694 0.5226 0.8458 0.5272 0.8458 0.4952 0.87 0.5046 0.87 0.5046 0.8799 0.4952 0.8799 0.3938 0.25 0.6039 0.25 0.6039 0.2648 0.3938 0.2648 0.6039 0.2648 0.6039 0.4859 0.6039 0.4859 0.6039 0.2648 0.4952 0.8694 0.5046 0.8694 0.5046 0.87 0.4952 0.87 0.4952 0.8806 0.5046 0.8806 0.5226 0.9022 0.4768 0.9022 0.4768 0.9022 0.5226 0.9022 0.5404 0.9236 0.4586 0.9236 0.4952 0.8799 0.5046 0.8799 0.5046 0.8806 0.4952 0.8806 0.4586 0.9236 0.5404 0.9236 0.571 0.9604 0.4274 0.9604 0.4274 0.9604 0.571 0.9604 0.6039 1 0.3938 1 0.3938 0.5 0.6039 0.5 0.6039 0.691 0.3938 0.691 0.3938 0.059 0.6039 0.059 0.6039 0.25 0.3938 0.25 0.3938 0.4859 0.6039 0.4859 0.6039 0.5 0.3938 0.5 0.3938 0.2648 0.6039 0.2648 0.6039 0.4859 0.3938 0.4859 0.6039 0.4859 0.3938 0.4859 0.3938 0.4859 0.6039 0.4859 0.3938 0.4859 0.3938 0.2648 0.3938 0.2648 0.3938 0.4859 0.3938 0.2648 0.6039 0.2648 0.6039 0.2648 0.3938 0.2648'></textureCoordinate>
                </indexedFaceSet>
              </shape>
            </group>
          </transform>
        </transform>
      </transform>
      <touchSensor id="noseCone1" enabled="false"/>
    </group>
   
  <!--Nose 2-->
  <group>
  <transform DEF="nose2" translation="3.3 -0.6 11.4" scale="0.386 0.34 0.36">
  <transform DEF='Cube_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.656532 0.588892 0.239477'>
          <transform DEF='Cube_ifs_TRANSFORM'>
            <group DEF='group_ME_Cube_001'>
              <shape onclick="loadNose2();">
                <appearance>
                  <material DEF='MA_Material_002' diffuseColor="1 1 1"></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 51 -1 52 53 54 55 -1 56 57 58 59 -1 60 61 62 63 -1 64 65 66 67 -1 68 69 70 71 -1 72 73 74 75 -1 76 77 78 79 -1 80 81 82 83 -1 84 85 86 87 -1 88 89 90 91 -1 92 93 94 95 -1 96 97 98 99 -1 100 101 102 103 -1 104 105 106 107 -1 108 109 110 111 -1 112 113 114 115 -1 116 117 118 119 -1 120 121 122 123 -1 124 125 126 127 -1 128 129 130 131 -1 132 133 134 135 -1 136 137 138 139 -1 140 141 142 143 -1 144 145 146 147 -1 148 149 150 151 -1 152 153 154 155 -1 156 157 158 159 -1 160 161 162 163 -1 164 165 166 167 -1 168 169 170 171 -1 172 173 174 175 -1 176 177 178 179 -1 180 181 182 183 -1 184 185 186 187 -1 188 189 190 191 -1 192 193 194 195 -1 196 197 198 199 -1 200 201 202 203 -1 204 205 206 207 -1 208 209 210 211 -1 212 213 214 215 -1 216 217 218 219 -1 220 221 222 223 -1 224 225 226 227 -1 228 229 230 231 -1 232 233 234 235 -1 236 237 238 239 -1 240 241 242 243 -1 244 245 246 247 -1 248 249 250 251 -1 252 253 254 255 -1 256 257 258 259 -1 260 261 262 263 -1 264 265 266 267 -1 268 269 270 271 -1 272 273 274 275 -1 276 277 278 279 -1 280 281 282 283 -1 284 285 286 287 -1 288 289 290 291 -1 292 293 294 295 -1 296 297 298 299 -1 300 301 302 303 -1 304 305 306 307 -1 308 309 310 311 -1 312 313 314 315 -1 316 317 318 319 -1 320 321 322 323 -1 324 325 326 327 -1' coordIndex='37 5 9 38 -1 77 25 3 70 -1 42 1 5 37 -1 71 5 1 69 -1 70 3 7 64 -1 31 15 11 29 -1 72 9 5 71 -1 53 10 6 51 -1 24 2 6 26 -1 35 23 15 31 -1 73 13 9 72 -1 55 14 10 53 -1 26 6 10 28 -1 79 47 18 67 -1 74 19 13 73 -1 59 21 14 55 -1 45 12 8 44 -1 67 18 19 74 -1 58 20 21 59 -1 40 16 17 46 -1 34 22 23 35 -1 46 17 12 45 -1 21 33 30 14 -1 47 34 35 41 -1 20 32 33 21 -1 14 30 28 10 -1 75 22 34 76 -1 43 26 28 44 -1 41 35 31 39 -1 36 24 26 43 -1 39 31 29 38 -1 3 25 27 7 -1 78 42 25 77 -1 7 27 29 11 -1 69 1 42 78 -1 13 39 38 9 -1 0 36 43 4 -1 19 41 39 13 -1 4 43 44 8 -1 18 47 41 19 -1 33 46 45 30 -1 32 40 46 33 -1 30 45 44 28 -1 76 34 47 79 -1 25 42 37 27 -1 27 37 38 29 -1 32 60 63 40 -1 0 48 62 36 -1 36 62 61 24 -1 20 58 60 32 -1 75 58 59 68 -1 16 56 57 17 -1 68 59 55 66 -1 17 57 54 12 -1 40 63 56 16 -1 66 55 53 65 -1 12 54 52 8 -1 65 53 51 64 -1 8 52 50 4 -1 2 49 51 6 -1 4 50 48 0 -1 24 61 49 2 -1 11 65 64 7 -1 15 66 65 11 -1 23 68 66 15 -1 22 75 68 23 -1 60 76 79 63 -1 48 69 78 62 -1 78 77 80 82 -1 58 75 76 60 -1 56 67 74 57 -1 57 74 73 54 -1 63 79 67 56 -1 54 73 72 52 -1 52 72 71 50 -1 49 70 64 51 -1 50 71 69 48 -1 61 77 70 49 -1 83 82 80 81 -1 77 61 81 80 -1 61 62 83 81 -1 62 78 82 83 -1'>
                  <coordinate DEF='coords_ME_Cube_001' point='-1 1 -1.56294 -1 1 1.56294 1 1 -1.56294 1 1 1.56294 -1 -0.527814 -1.13291 -1 -0.527814 1.13291 1 -0.527814 -1.13291 1 -0.527814 1.13291 -0.684571 -0.838042 -0.72743 -0.683551 -0.838119 0.729115 0.684571 -0.838042 -0.72743 0.683551 -0.838119 0.729115 -0.394546 -0.98141 -0.40758 -0.403963 -0.997412 0.411939 0.394546 -0.98141 -0.40758 0.403963 -0.997412 0.41194 -0.04517 -1.03689 -0.0531 -0.226653 -1.0206 -0.233728 -0.04885 -1.04553 0.038213 -0.225856 -1.0106 0.217766 0.04517 -1.03689 -0.0531 0.226653 -1.0206 -0.233727 0.04885 -1.04553 0.038213 0.225856 -1.0106 0.217766 0.887006 1 -1.56294 0.887006 1 1.56294 0.887006 -0.527814 -1.13291 0.887006 -0.527814 1.13291 0.607218 -0.838042 -0.72743 0.606313 -0.838119 0.729115 0.349965 -0.98141 -0.40758 0.358317 -0.997412 0.41194 0.040066 -1.03689 -0.0531 0.201043 -1.0206 -0.233727 0.043331 -1.04553 0.038213 0.200335 -1.0106 0.217766 -0.881356 1 -1.56294 -0.881356 -0.527814 1.13291 -0.602451 -0.838119 0.729115 -0.356035 -0.997412 0.411939 -0.039811 -1.03689 -0.0531 -0.199059 -1.0106 0.217766 -0.881356 1 1.56294 -0.881356 -0.527814 -1.13291 -0.603351 -0.838042 -0.72743 -0.347736 -0.98141 -0.40758 -0.199762 -1.0206 -0.233728 -0.043055 -1.04553 0.038213 -1 1 -1.3285 1 1 -1.3285 -1 -0.527814 -0.96297 1 -0.527814 -0.96297 -0.684494 -0.838048 -0.618189 0.684494 -0.838048 -0.618189 -0.395253 -0.98261 -0.346116 0.395253 -0.98261 -0.346116 -0.045446 -1.03754 -0.046252 -0.226593 -1.01985 -0.199866 0.045446 -1.03754 -0.046252 0.226593 -1.01985 -0.199866 0.040311 -1.03754 -0.046252 0.887006 1 -1.3285 -0.881356 1 -1.3285 -0.040054 -1.03754 -0.046252 1 -0.527814 0.941347 0.683637 -0.838113 0.605974 0.403167 -0.996059 0.342655 -0.048539 -1.0448 0.030493 0.225923 -1.01145 0.179595 -1 1 1.29867 1 1 1.29867 -1 -0.527814 0.941347 -0.683637 -0.838113 0.605974 -0.403167 -0.996059 0.342655 -0.225923 -1.01145 0.179595 0.048539 -1.0448 0.030493 0.043055 -1.0448 0.030493 0.887006 1 1.29867 -0.881356 1 1.29867 -0.04278 -1.0448 0.030493 0.887006 0.216208 1.29867 0.887006 0.216208 -1.3285 -0.881356 0.216208 1.29867 -0.881356 0.216208 -1.3285'></coordinate>
                  <textureCoordinate point='0.8602 0.691 0.875 0.691 0.8354 0.7298 0.8253 0.7298 0.6039 0.4859 0.625 0.4859 0.625 0.5 0.6039 0.5 0.8602 0.5 0.875 0.5 0.875 0.691 0.8602 0.691 0.6039 0.059 0.625 0.059 0.625 0.25 0.6039 0.25 0.6039 0.5 0.625 0.5 0.625 0.691 0.6039 0.691 0.5427 0.8372 0.5427 0.8323 0.5648 0.8102 0.5648 0.8175 0.571 0.9604 0.5854 0.9604 0.625 1 0.6039 1 0.4274 0.7693 0.4146 0.7693 0.375 0.691 0.3938 0.691 0.3609 0.5 0.375 0.5 0.375 0.691 0.3609 0.691 0.5253 0.8526 0.5253 0.8497 0.5427 0.8323 0.5427 0.8372 0.5404 0.9236 0.5486 0.9236 0.5854 0.9604 0.571 0.9604 0.4586 0.8205 0.4514 0.8205 0.4146 0.7693 0.4274 0.7693 0.3609 0.691 0.375 0.691 0.3354 0.7298 0.3258 0.7298 0.5046 0.8799 0.5056 0.8799 0.5056 0.8806 0.5046 0.8806 0.5226 0.9022 0.5272 0.9022 0.5486 0.9236 0.5404 0.9236 0.4768 0.8458 0.4728 0.8458 0.4514 0.8205 0.4586 0.8205 0.4573 0.9126 0.4573 0.9177 0.4352 0.9398 0.4352 0.9321 0.5046 0.8806 0.5056 0.8806 0.5272 0.9022 0.5226 0.9022 0.4952 0.8694 0.4944 0.8694 0.4728 0.8458 0.4768 0.8458 0.4944 0.8799 0.4944 0.8806 0.4747 0.9003 0.4747 0.8973 0.5056 0.87 0.5056 0.8694 0.5253 0.8497 0.5253 0.8526 0.4747 0.8973 0.4747 0.9003 0.4573 0.9177 0.4573 0.9126 0.4747 0.8497 0.4747 0.8526 0.4573 0.8372 0.4573 0.8323 0.5056 0.8799 0.5056 0.87 0.5253 0.8526 0.5253 0.8973 0.4944 0.8694 0.4944 0.87 0.4747 0.8526 0.4747 0.8497 0.4573 0.8323 0.4573 0.8372 0.4352 0.8175 0.4352 0.8102 0.5046 0.8694 0.5056 0.8694 0.5056 0.87 0.5046 0.87 0.1398 0.691 0.3609 0.691 0.3258 0.7298 0.1747 0.7298 0.5253 0.8973 0.5253 0.8526 0.5427 0.8372 0.5427 0.9126 0.1398 0.5 0.3609 0.5 0.3609 0.691 0.1398 0.691 0.5427 0.9126 0.5427 0.8372 0.5648 0.8175 0.5648 0.9321 0.625 0.5 0.6391 0.5 0.6391 0.691 0.625 0.691 0.6039 0.2648 0.625 0.2648 0.625 0.4859 0.6039 0.4859 0.625 0.691 0.6391 0.691 0.6742 0.7298 0.6646 0.7298 0.6039 0.25 0.625 0.25 0.625 0.2648 0.6039 0.2648 0.5427 0.9177 0.5427 0.9126 0.5648 0.9321 0.5648 0.9398 0.125 0.5 0.1398 0.5 0.1398 0.691 0.125 0.691 0.5253 0.9003 0.5253 0.8973 0.5427 0.9126 0.5427 0.9177 0.125 0.691 0.1398 0.691 0.1747 0.7298 0.1646 0.7298 0.5056 0.8806 0.5056 0.8799 0.5253 0.8973 0.5253 0.9003 0.4747 0.8526 0.4747 0.8973 0.4573 0.9126 0.4573 0.8372 0.4944 0.87 0.4944 0.8799 0.4747 0.8973 0.4747 0.8526 0.4573 0.8372 0.4573 0.9126 0.4352 0.9321 0.4352 0.8175 0.5046 0.87 0.5056 0.87 0.5056 0.8799 0.5046 0.8799 0.6391 0.5 0.8602 0.5 0.8602 0.691 0.6391 0.691 0.6391 0.691 0.8602 0.691 0.8253 0.7298 0.6742 0.7298 0.4944 0.87 0.4952 0.87 0.4952 0.8799 0.4944 0.8799 0.375 0.25 0.3938 0.25 0.3938 0.2648 0.375 0.2648 0.375 0.2648 0.3938 0.2648 0.3938 0.4859 0.375 0.4859 0.4944 0.8694 0.4952 0.8694 0.4952 0.87 0.4944 0.87 0.5046 0.8694 0.4952 0.8694 0.4768 0.8458 0.5226 0.8458 0.4944 0.8806 0.4952 0.8806 0.4768 0.9022 0.4728 0.9022 0.5226 0.8458 0.4768 0.8458 0.4586 0.8205 0.5404 0.8205 0.4728 0.9022 0.4768 0.9022 0.4586 0.9236 0.4514 0.9236 0.4944 0.8799 0.4952 0.8799 0.4952 0.8806 0.4944 0.8806 0.5404 0.8205 0.4586 0.8205 0.4274 0.7693 0.571 0.7693 0.4514 0.9236 0.4586 0.9236 0.4274 0.9604 0.4146 0.9604 0.571 0.7693 0.4274 0.7693 0.3938 0.691 0.6039 0.691 0.4146 0.9604 0.4274 0.9604 0.3938 1 0.375 1 0.375 0.5 0.3938 0.5 0.3938 0.691 0.375 0.691 0.375 0.059 0.3938 0.059 0.3938 0.25 0.375 0.25 0.375 0.4859 0.3938 0.4859 0.3938 0.5 0.375 0.5 0.5854 0.7693 0.571 0.7693 0.6039 0.691 0.625 0.691 0.5486 0.8205 0.5404 0.8205 0.571 0.7693 0.5854 0.7693 0.5272 0.8458 0.5226 0.8458 0.5404 0.8205 0.5486 0.8205 0.5056 0.8694 0.5046 0.8694 0.5226 0.8458 0.5272 0.8458 0.4952 0.87 0.5046 0.87 0.5046 0.8799 0.4952 0.8799 0.3938 0.25 0.6039 0.25 0.6039 0.2648 0.3938 0.2648 0.6039 0.2648 0.6039 0.4859 0.6039 0.4859 0.6039 0.2648 0.4952 0.8694 0.5046 0.8694 0.5046 0.87 0.4952 0.87 0.4952 0.8806 0.5046 0.8806 0.5226 0.9022 0.4768 0.9022 0.4768 0.9022 0.5226 0.9022 0.5404 0.9236 0.4586 0.9236 0.4952 0.8799 0.5046 0.8799 0.5046 0.8806 0.4952 0.8806 0.4586 0.9236 0.5404 0.9236 0.571 0.9604 0.4274 0.9604 0.4274 0.9604 0.571 0.9604 0.6039 1 0.3938 1 0.3938 0.5 0.6039 0.5 0.6039 0.691 0.3938 0.691 0.3938 0.059 0.6039 0.059 0.6039 0.25 0.3938 0.25 0.3938 0.4859 0.6039 0.4859 0.6039 0.5 0.3938 0.5 0.3938 0.2648 0.6039 0.2648 0.6039 0.4859 0.3938 0.4859 0.6039 0.4859 0.3938 0.4859 0.3938 0.4859 0.6039 0.4859 0.3938 0.4859 0.3938 0.2648 0.3938 0.2648 0.3938 0.4859 0.3938 0.2648 0.6039 0.2648 0.6039 0.2648 0.3938 0.2648'></textureCoordinate>
                </indexedFaceSet>
              </shape>
            </group>
          </transform>
        </transform>
      </transform>
      <touchSensor id="noseCone2" enabled="false"/>
    </group>
  
  <!--Nose 3-->
  <group>
  <transform DEF="nose3" translation="3.3 -0.9 11.4" scale="0.386 0.34 0.36">
  <transform DEF='Cube_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.656532 0.588892 0.239477'>
          <transform DEF='Cube_ifs_TRANSFORM'>
            <group DEF='group_ME_Cube_001'>
              <shape onclick="loadNose3();">
                <appearance>
                  <material DEF='MA_Material_002' diffuseColor="1 1 1"></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 51 -1 52 53 54 55 -1 56 57 58 59 -1 60 61 62 63 -1 64 65 66 67 -1 68 69 70 71 -1 72 73 74 75 -1 76 77 78 79 -1 80 81 82 83 -1 84 85 86 87 -1 88 89 90 91 -1 92 93 94 95 -1 96 97 98 99 -1 100 101 102 103 -1 104 105 106 107 -1 108 109 110 111 -1 112 113 114 115 -1 116 117 118 119 -1 120 121 122 123 -1 124 125 126 127 -1 128 129 130 131 -1 132 133 134 135 -1 136 137 138 139 -1 140 141 142 143 -1 144 145 146 147 -1 148 149 150 151 -1 152 153 154 155 -1 156 157 158 159 -1 160 161 162 163 -1 164 165 166 167 -1 168 169 170 171 -1 172 173 174 175 -1 176 177 178 179 -1 180 181 182 183 -1 184 185 186 187 -1 188 189 190 191 -1 192 193 194 195 -1 196 197 198 199 -1 200 201 202 203 -1 204 205 206 207 -1 208 209 210 211 -1 212 213 214 215 -1 216 217 218 219 -1 220 221 222 223 -1 224 225 226 227 -1 228 229 230 231 -1 232 233 234 235 -1 236 237 238 239 -1 240 241 242 243 -1 244 245 246 247 -1 248 249 250 251 -1 252 253 254 255 -1 256 257 258 259 -1 260 261 262 263 -1 264 265 266 267 -1 268 269 270 271 -1 272 273 274 275 -1 276 277 278 279 -1 280 281 282 283 -1 284 285 286 287 -1 288 289 290 291 -1 292 293 294 295 -1 296 297 298 299 -1 300 301 302 303 -1 304 305 306 307 -1 308 309 310 311 -1 312 313 314 315 -1 316 317 318 319 -1 320 321 322 323 -1 324 325 326 327 -1' coordIndex='37 5 9 38 -1 77 25 3 70 -1 42 1 5 37 -1 71 5 1 69 -1 70 3 7 64 -1 31 15 11 29 -1 72 9 5 71 -1 53 10 6 51 -1 24 2 6 26 -1 35 23 15 31 -1 73 13 9 72 -1 55 14 10 53 -1 26 6 10 28 -1 79 47 18 67 -1 74 19 13 73 -1 59 21 14 55 -1 45 12 8 44 -1 67 18 19 74 -1 58 20 21 59 -1 40 16 17 46 -1 34 22 23 35 -1 46 17 12 45 -1 21 33 30 14 -1 47 34 35 41 -1 20 32 33 21 -1 14 30 28 10 -1 75 22 34 76 -1 43 26 28 44 -1 41 35 31 39 -1 36 24 26 43 -1 39 31 29 38 -1 3 25 27 7 -1 78 42 25 77 -1 7 27 29 11 -1 69 1 42 78 -1 13 39 38 9 -1 0 36 43 4 -1 19 41 39 13 -1 4 43 44 8 -1 18 47 41 19 -1 33 46 45 30 -1 32 40 46 33 -1 30 45 44 28 -1 76 34 47 79 -1 25 42 37 27 -1 27 37 38 29 -1 32 60 63 40 -1 0 48 62 36 -1 36 62 61 24 -1 20 58 60 32 -1 75 58 59 68 -1 16 56 57 17 -1 68 59 55 66 -1 17 57 54 12 -1 40 63 56 16 -1 66 55 53 65 -1 12 54 52 8 -1 65 53 51 64 -1 8 52 50 4 -1 2 49 51 6 -1 4 50 48 0 -1 24 61 49 2 -1 11 65 64 7 -1 15 66 65 11 -1 23 68 66 15 -1 22 75 68 23 -1 60 76 79 63 -1 48 69 78 62 -1 78 77 80 82 -1 58 75 76 60 -1 56 67 74 57 -1 57 74 73 54 -1 63 79 67 56 -1 54 73 72 52 -1 52 72 71 50 -1 49 70 64 51 -1 50 71 69 48 -1 61 77 70 49 -1 83 82 80 81 -1 77 61 81 80 -1 61 62 83 81 -1 62 78 82 83 -1'>
                  <coordinate DEF='coords_ME_Cube_001' point='-1 1 -1.56294 -1 1 1.56294 1 1 -1.56294 1 1 1.56294 -1 -0.527814 -1.13291 -1 -0.527814 1.13291 1 -0.527814 -1.13291 1 -0.527814 1.13291 -0.684571 -0.838042 -0.72743 -0.683551 -0.838119 0.729115 0.684571 -0.838042 -0.72743 0.683551 -0.838119 0.729115 -0.394546 -0.98141 -0.40758 -0.403963 -0.997412 0.411939 0.394546 -0.98141 -0.40758 0.403963 -0.997412 0.41194 -0.04517 -1.03689 -0.0531 -0.226653 -1.0206 -0.233728 -0.04885 -1.04553 0.038213 -0.225856 -1.0106 0.217766 0.04517 -1.03689 -0.0531 0.226653 -1.0206 -0.233727 0.04885 -1.04553 0.038213 0.225856 -1.0106 0.217766 0.887006 1 -1.56294 0.887006 1 1.56294 0.887006 -0.527814 -1.13291 0.887006 -0.527814 1.13291 0.607218 -0.838042 -0.72743 0.606313 -0.838119 0.729115 0.349965 -0.98141 -0.40758 0.358317 -0.997412 0.41194 0.040066 -1.03689 -0.0531 0.201043 -1.0206 -0.233727 0.043331 -1.04553 0.038213 0.200335 -1.0106 0.217766 -0.881356 1 -1.56294 -0.881356 -0.527814 1.13291 -0.602451 -0.838119 0.729115 -0.356035 -0.997412 0.411939 -0.039811 -1.03689 -0.0531 -0.199059 -1.0106 0.217766 -0.881356 1 1.56294 -0.881356 -0.527814 -1.13291 -0.603351 -0.838042 -0.72743 -0.347736 -0.98141 -0.40758 -0.199762 -1.0206 -0.233728 -0.043055 -1.04553 0.038213 -1 1 -1.3285 1 1 -1.3285 -1 -0.527814 -0.96297 1 -0.527814 -0.96297 -0.684494 -0.838048 -0.618189 0.684494 -0.838048 -0.618189 -0.395253 -0.98261 -0.346116 0.395253 -0.98261 -0.346116 -0.045446 -1.03754 -0.046252 -0.226593 -1.01985 -0.199866 0.045446 -1.03754 -0.046252 0.226593 -1.01985 -0.199866 0.040311 -1.03754 -0.046252 0.887006 1 -1.3285 -0.881356 1 -1.3285 -0.040054 -1.03754 -0.046252 1 -0.527814 0.941347 0.683637 -0.838113 0.605974 0.403167 -0.996059 0.342655 -0.048539 -1.0448 0.030493 0.225923 -1.01145 0.179595 -1 1 1.29867 1 1 1.29867 -1 -0.527814 0.941347 -0.683637 -0.838113 0.605974 -0.403167 -0.996059 0.342655 -0.225923 -1.01145 0.179595 0.048539 -1.0448 0.030493 0.043055 -1.0448 0.030493 0.887006 1 1.29867 -0.881356 1 1.29867 -0.04278 -1.0448 0.030493 0.887006 0.216208 1.29867 0.887006 0.216208 -1.3285 -0.881356 0.216208 1.29867 -0.881356 0.216208 -1.3285'></coordinate>
                  <textureCoordinate point='0.8602 0.691 0.875 0.691 0.8354 0.7298 0.8253 0.7298 0.6039 0.4859 0.625 0.4859 0.625 0.5 0.6039 0.5 0.8602 0.5 0.875 0.5 0.875 0.691 0.8602 0.691 0.6039 0.059 0.625 0.059 0.625 0.25 0.6039 0.25 0.6039 0.5 0.625 0.5 0.625 0.691 0.6039 0.691 0.5427 0.8372 0.5427 0.8323 0.5648 0.8102 0.5648 0.8175 0.571 0.9604 0.5854 0.9604 0.625 1 0.6039 1 0.4274 0.7693 0.4146 0.7693 0.375 0.691 0.3938 0.691 0.3609 0.5 0.375 0.5 0.375 0.691 0.3609 0.691 0.5253 0.8526 0.5253 0.8497 0.5427 0.8323 0.5427 0.8372 0.5404 0.9236 0.5486 0.9236 0.5854 0.9604 0.571 0.9604 0.4586 0.8205 0.4514 0.8205 0.4146 0.7693 0.4274 0.7693 0.3609 0.691 0.375 0.691 0.3354 0.7298 0.3258 0.7298 0.5046 0.8799 0.5056 0.8799 0.5056 0.8806 0.5046 0.8806 0.5226 0.9022 0.5272 0.9022 0.5486 0.9236 0.5404 0.9236 0.4768 0.8458 0.4728 0.8458 0.4514 0.8205 0.4586 0.8205 0.4573 0.9126 0.4573 0.9177 0.4352 0.9398 0.4352 0.9321 0.5046 0.8806 0.5056 0.8806 0.5272 0.9022 0.5226 0.9022 0.4952 0.8694 0.4944 0.8694 0.4728 0.8458 0.4768 0.8458 0.4944 0.8799 0.4944 0.8806 0.4747 0.9003 0.4747 0.8973 0.5056 0.87 0.5056 0.8694 0.5253 0.8497 0.5253 0.8526 0.4747 0.8973 0.4747 0.9003 0.4573 0.9177 0.4573 0.9126 0.4747 0.8497 0.4747 0.8526 0.4573 0.8372 0.4573 0.8323 0.5056 0.8799 0.5056 0.87 0.5253 0.8526 0.5253 0.8973 0.4944 0.8694 0.4944 0.87 0.4747 0.8526 0.4747 0.8497 0.4573 0.8323 0.4573 0.8372 0.4352 0.8175 0.4352 0.8102 0.5046 0.8694 0.5056 0.8694 0.5056 0.87 0.5046 0.87 0.1398 0.691 0.3609 0.691 0.3258 0.7298 0.1747 0.7298 0.5253 0.8973 0.5253 0.8526 0.5427 0.8372 0.5427 0.9126 0.1398 0.5 0.3609 0.5 0.3609 0.691 0.1398 0.691 0.5427 0.9126 0.5427 0.8372 0.5648 0.8175 0.5648 0.9321 0.625 0.5 0.6391 0.5 0.6391 0.691 0.625 0.691 0.6039 0.2648 0.625 0.2648 0.625 0.4859 0.6039 0.4859 0.625 0.691 0.6391 0.691 0.6742 0.7298 0.6646 0.7298 0.6039 0.25 0.625 0.25 0.625 0.2648 0.6039 0.2648 0.5427 0.9177 0.5427 0.9126 0.5648 0.9321 0.5648 0.9398 0.125 0.5 0.1398 0.5 0.1398 0.691 0.125 0.691 0.5253 0.9003 0.5253 0.8973 0.5427 0.9126 0.5427 0.9177 0.125 0.691 0.1398 0.691 0.1747 0.7298 0.1646 0.7298 0.5056 0.8806 0.5056 0.8799 0.5253 0.8973 0.5253 0.9003 0.4747 0.8526 0.4747 0.8973 0.4573 0.9126 0.4573 0.8372 0.4944 0.87 0.4944 0.8799 0.4747 0.8973 0.4747 0.8526 0.4573 0.8372 0.4573 0.9126 0.4352 0.9321 0.4352 0.8175 0.5046 0.87 0.5056 0.87 0.5056 0.8799 0.5046 0.8799 0.6391 0.5 0.8602 0.5 0.8602 0.691 0.6391 0.691 0.6391 0.691 0.8602 0.691 0.8253 0.7298 0.6742 0.7298 0.4944 0.87 0.4952 0.87 0.4952 0.8799 0.4944 0.8799 0.375 0.25 0.3938 0.25 0.3938 0.2648 0.375 0.2648 0.375 0.2648 0.3938 0.2648 0.3938 0.4859 0.375 0.4859 0.4944 0.8694 0.4952 0.8694 0.4952 0.87 0.4944 0.87 0.5046 0.8694 0.4952 0.8694 0.4768 0.8458 0.5226 0.8458 0.4944 0.8806 0.4952 0.8806 0.4768 0.9022 0.4728 0.9022 0.5226 0.8458 0.4768 0.8458 0.4586 0.8205 0.5404 0.8205 0.4728 0.9022 0.4768 0.9022 0.4586 0.9236 0.4514 0.9236 0.4944 0.8799 0.4952 0.8799 0.4952 0.8806 0.4944 0.8806 0.5404 0.8205 0.4586 0.8205 0.4274 0.7693 0.571 0.7693 0.4514 0.9236 0.4586 0.9236 0.4274 0.9604 0.4146 0.9604 0.571 0.7693 0.4274 0.7693 0.3938 0.691 0.6039 0.691 0.4146 0.9604 0.4274 0.9604 0.3938 1 0.375 1 0.375 0.5 0.3938 0.5 0.3938 0.691 0.375 0.691 0.375 0.059 0.3938 0.059 0.3938 0.25 0.375 0.25 0.375 0.4859 0.3938 0.4859 0.3938 0.5 0.375 0.5 0.5854 0.7693 0.571 0.7693 0.6039 0.691 0.625 0.691 0.5486 0.8205 0.5404 0.8205 0.571 0.7693 0.5854 0.7693 0.5272 0.8458 0.5226 0.8458 0.5404 0.8205 0.5486 0.8205 0.5056 0.8694 0.5046 0.8694 0.5226 0.8458 0.5272 0.8458 0.4952 0.87 0.5046 0.87 0.5046 0.8799 0.4952 0.8799 0.3938 0.25 0.6039 0.25 0.6039 0.2648 0.3938 0.2648 0.6039 0.2648 0.6039 0.4859 0.6039 0.4859 0.6039 0.2648 0.4952 0.8694 0.5046 0.8694 0.5046 0.87 0.4952 0.87 0.4952 0.8806 0.5046 0.8806 0.5226 0.9022 0.4768 0.9022 0.4768 0.9022 0.5226 0.9022 0.5404 0.9236 0.4586 0.9236 0.4952 0.8799 0.5046 0.8799 0.5046 0.8806 0.4952 0.8806 0.4586 0.9236 0.5404 0.9236 0.571 0.9604 0.4274 0.9604 0.4274 0.9604 0.571 0.9604 0.6039 1 0.3938 1 0.3938 0.5 0.6039 0.5 0.6039 0.691 0.3938 0.691 0.3938 0.059 0.6039 0.059 0.6039 0.25 0.3938 0.25 0.3938 0.4859 0.6039 0.4859 0.6039 0.5 0.3938 0.5 0.3938 0.2648 0.6039 0.2648 0.6039 0.4859 0.3938 0.4859 0.6039 0.4859 0.3938 0.4859 0.3938 0.4859 0.6039 0.4859 0.3938 0.4859 0.3938 0.2648 0.3938 0.2648 0.3938 0.4859 0.3938 0.2648 0.6039 0.2648 0.6039 0.2648 0.3938 0.2648'></textureCoordinate>
                </indexedFaceSet>
              </shape>
            </group>
          </transform>
        </transform>
      </transform>
      <touchSensor id="noseCone3" enabled="false"/>
    </group>
  
  <!--Nose 4-->
  <group>
  <transform DEF="nose4" translation="3.3 -1.2 11.4" scale="0.386 0.34 0.36">
  <transform DEF='Cube_TRANSFORM' rotation='0 0.707107 0.707107 3.14159' scale='0.656532 0.588892 0.239477'>
          <transform DEF='Cube_ifs_TRANSFORM'>
            <group DEF='group_ME_Cube_001'>
              <shape onclick="loadNose4();">
                <appearance>
                  <material DEF='MA_Material_002' diffuseColor="1 1 1"></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 51 -1 52 53 54 55 -1 56 57 58 59 -1 60 61 62 63 -1 64 65 66 67 -1 68 69 70 71 -1 72 73 74 75 -1 76 77 78 79 -1 80 81 82 83 -1 84 85 86 87 -1 88 89 90 91 -1 92 93 94 95 -1 96 97 98 99 -1 100 101 102 103 -1 104 105 106 107 -1 108 109 110 111 -1 112 113 114 115 -1 116 117 118 119 -1 120 121 122 123 -1 124 125 126 127 -1 128 129 130 131 -1 132 133 134 135 -1 136 137 138 139 -1 140 141 142 143 -1 144 145 146 147 -1 148 149 150 151 -1 152 153 154 155 -1 156 157 158 159 -1 160 161 162 163 -1 164 165 166 167 -1 168 169 170 171 -1 172 173 174 175 -1 176 177 178 179 -1 180 181 182 183 -1 184 185 186 187 -1 188 189 190 191 -1 192 193 194 195 -1 196 197 198 199 -1 200 201 202 203 -1 204 205 206 207 -1 208 209 210 211 -1 212 213 214 215 -1 216 217 218 219 -1 220 221 222 223 -1 224 225 226 227 -1 228 229 230 231 -1 232 233 234 235 -1 236 237 238 239 -1 240 241 242 243 -1 244 245 246 247 -1 248 249 250 251 -1 252 253 254 255 -1 256 257 258 259 -1 260 261 262 263 -1 264 265 266 267 -1 268 269 270 271 -1 272 273 274 275 -1 276 277 278 279 -1 280 281 282 283 -1 284 285 286 287 -1 288 289 290 291 -1 292 293 294 295 -1 296 297 298 299 -1 300 301 302 303 -1 304 305 306 307 -1 308 309 310 311 -1 312 313 314 315 -1 316 317 318 319 -1 320 321 322 323 -1 324 325 326 327 -1' coordIndex='37 5 9 38 -1 77 25 3 70 -1 42 1 5 37 -1 71 5 1 69 -1 70 3 7 64 -1 31 15 11 29 -1 72 9 5 71 -1 53 10 6 51 -1 24 2 6 26 -1 35 23 15 31 -1 73 13 9 72 -1 55 14 10 53 -1 26 6 10 28 -1 79 47 18 67 -1 74 19 13 73 -1 59 21 14 55 -1 45 12 8 44 -1 67 18 19 74 -1 58 20 21 59 -1 40 16 17 46 -1 34 22 23 35 -1 46 17 12 45 -1 21 33 30 14 -1 47 34 35 41 -1 20 32 33 21 -1 14 30 28 10 -1 75 22 34 76 -1 43 26 28 44 -1 41 35 31 39 -1 36 24 26 43 -1 39 31 29 38 -1 3 25 27 7 -1 78 42 25 77 -1 7 27 29 11 -1 69 1 42 78 -1 13 39 38 9 -1 0 36 43 4 -1 19 41 39 13 -1 4 43 44 8 -1 18 47 41 19 -1 33 46 45 30 -1 32 40 46 33 -1 30 45 44 28 -1 76 34 47 79 -1 25 42 37 27 -1 27 37 38 29 -1 32 60 63 40 -1 0 48 62 36 -1 36 62 61 24 -1 20 58 60 32 -1 75 58 59 68 -1 16 56 57 17 -1 68 59 55 66 -1 17 57 54 12 -1 40 63 56 16 -1 66 55 53 65 -1 12 54 52 8 -1 65 53 51 64 -1 8 52 50 4 -1 2 49 51 6 -1 4 50 48 0 -1 24 61 49 2 -1 11 65 64 7 -1 15 66 65 11 -1 23 68 66 15 -1 22 75 68 23 -1 60 76 79 63 -1 48 69 78 62 -1 78 77 80 82 -1 58 75 76 60 -1 56 67 74 57 -1 57 74 73 54 -1 63 79 67 56 -1 54 73 72 52 -1 52 72 71 50 -1 49 70 64 51 -1 50 71 69 48 -1 61 77 70 49 -1 83 82 80 81 -1 77 61 81 80 -1 61 62 83 81 -1 62 78 82 83 -1'>
                  <coordinate DEF='coords_ME_Cube_001' point='-1 1 -1.56294 -1 1 1.56294 1 1 -1.56294 1 1 1.56294 -1 -0.527814 -1.13291 -1 -0.527814 1.13291 1 -0.527814 -1.13291 1 -0.527814 1.13291 -0.684571 -0.838042 -0.72743 -0.683551 -0.838119 0.729115 0.684571 -0.838042 -0.72743 0.683551 -0.838119 0.729115 -0.394546 -0.98141 -0.40758 -0.403963 -0.997412 0.411939 0.394546 -0.98141 -0.40758 0.403963 -0.997412 0.41194 -0.04517 -1.03689 -0.0531 -0.226653 -1.0206 -0.233728 -0.04885 -1.04553 0.038213 -0.225856 -1.0106 0.217766 0.04517 -1.03689 -0.0531 0.226653 -1.0206 -0.233727 0.04885 -1.04553 0.038213 0.225856 -1.0106 0.217766 0.887006 1 -1.56294 0.887006 1 1.56294 0.887006 -0.527814 -1.13291 0.887006 -0.527814 1.13291 0.607218 -0.838042 -0.72743 0.606313 -0.838119 0.729115 0.349965 -0.98141 -0.40758 0.358317 -0.997412 0.41194 0.040066 -1.03689 -0.0531 0.201043 -1.0206 -0.233727 0.043331 -1.04553 0.038213 0.200335 -1.0106 0.217766 -0.881356 1 -1.56294 -0.881356 -0.527814 1.13291 -0.602451 -0.838119 0.729115 -0.356035 -0.997412 0.411939 -0.039811 -1.03689 -0.0531 -0.199059 -1.0106 0.217766 -0.881356 1 1.56294 -0.881356 -0.527814 -1.13291 -0.603351 -0.838042 -0.72743 -0.347736 -0.98141 -0.40758 -0.199762 -1.0206 -0.233728 -0.043055 -1.04553 0.038213 -1 1 -1.3285 1 1 -1.3285 -1 -0.527814 -0.96297 1 -0.527814 -0.96297 -0.684494 -0.838048 -0.618189 0.684494 -0.838048 -0.618189 -0.395253 -0.98261 -0.346116 0.395253 -0.98261 -0.346116 -0.045446 -1.03754 -0.046252 -0.226593 -1.01985 -0.199866 0.045446 -1.03754 -0.046252 0.226593 -1.01985 -0.199866 0.040311 -1.03754 -0.046252 0.887006 1 -1.3285 -0.881356 1 -1.3285 -0.040054 -1.03754 -0.046252 1 -0.527814 0.941347 0.683637 -0.838113 0.605974 0.403167 -0.996059 0.342655 -0.048539 -1.0448 0.030493 0.225923 -1.01145 0.179595 -1 1 1.29867 1 1 1.29867 -1 -0.527814 0.941347 -0.683637 -0.838113 0.605974 -0.403167 -0.996059 0.342655 -0.225923 -1.01145 0.179595 0.048539 -1.0448 0.030493 0.043055 -1.0448 0.030493 0.887006 1 1.29867 -0.881356 1 1.29867 -0.04278 -1.0448 0.030493 0.887006 0.216208 1.29867 0.887006 0.216208 -1.3285 -0.881356 0.216208 1.29867 -0.881356 0.216208 -1.3285'></coordinate>
                  <textureCoordinate point='0.8602 0.691 0.875 0.691 0.8354 0.7298 0.8253 0.7298 0.6039 0.4859 0.625 0.4859 0.625 0.5 0.6039 0.5 0.8602 0.5 0.875 0.5 0.875 0.691 0.8602 0.691 0.6039 0.059 0.625 0.059 0.625 0.25 0.6039 0.25 0.6039 0.5 0.625 0.5 0.625 0.691 0.6039 0.691 0.5427 0.8372 0.5427 0.8323 0.5648 0.8102 0.5648 0.8175 0.571 0.9604 0.5854 0.9604 0.625 1 0.6039 1 0.4274 0.7693 0.4146 0.7693 0.375 0.691 0.3938 0.691 0.3609 0.5 0.375 0.5 0.375 0.691 0.3609 0.691 0.5253 0.8526 0.5253 0.8497 0.5427 0.8323 0.5427 0.8372 0.5404 0.9236 0.5486 0.9236 0.5854 0.9604 0.571 0.9604 0.4586 0.8205 0.4514 0.8205 0.4146 0.7693 0.4274 0.7693 0.3609 0.691 0.375 0.691 0.3354 0.7298 0.3258 0.7298 0.5046 0.8799 0.5056 0.8799 0.5056 0.8806 0.5046 0.8806 0.5226 0.9022 0.5272 0.9022 0.5486 0.9236 0.5404 0.9236 0.4768 0.8458 0.4728 0.8458 0.4514 0.8205 0.4586 0.8205 0.4573 0.9126 0.4573 0.9177 0.4352 0.9398 0.4352 0.9321 0.5046 0.8806 0.5056 0.8806 0.5272 0.9022 0.5226 0.9022 0.4952 0.8694 0.4944 0.8694 0.4728 0.8458 0.4768 0.8458 0.4944 0.8799 0.4944 0.8806 0.4747 0.9003 0.4747 0.8973 0.5056 0.87 0.5056 0.8694 0.5253 0.8497 0.5253 0.8526 0.4747 0.8973 0.4747 0.9003 0.4573 0.9177 0.4573 0.9126 0.4747 0.8497 0.4747 0.8526 0.4573 0.8372 0.4573 0.8323 0.5056 0.8799 0.5056 0.87 0.5253 0.8526 0.5253 0.8973 0.4944 0.8694 0.4944 0.87 0.4747 0.8526 0.4747 0.8497 0.4573 0.8323 0.4573 0.8372 0.4352 0.8175 0.4352 0.8102 0.5046 0.8694 0.5056 0.8694 0.5056 0.87 0.5046 0.87 0.1398 0.691 0.3609 0.691 0.3258 0.7298 0.1747 0.7298 0.5253 0.8973 0.5253 0.8526 0.5427 0.8372 0.5427 0.9126 0.1398 0.5 0.3609 0.5 0.3609 0.691 0.1398 0.691 0.5427 0.9126 0.5427 0.8372 0.5648 0.8175 0.5648 0.9321 0.625 0.5 0.6391 0.5 0.6391 0.691 0.625 0.691 0.6039 0.2648 0.625 0.2648 0.625 0.4859 0.6039 0.4859 0.625 0.691 0.6391 0.691 0.6742 0.7298 0.6646 0.7298 0.6039 0.25 0.625 0.25 0.625 0.2648 0.6039 0.2648 0.5427 0.9177 0.5427 0.9126 0.5648 0.9321 0.5648 0.9398 0.125 0.5 0.1398 0.5 0.1398 0.691 0.125 0.691 0.5253 0.9003 0.5253 0.8973 0.5427 0.9126 0.5427 0.9177 0.125 0.691 0.1398 0.691 0.1747 0.7298 0.1646 0.7298 0.5056 0.8806 0.5056 0.8799 0.5253 0.8973 0.5253 0.9003 0.4747 0.8526 0.4747 0.8973 0.4573 0.9126 0.4573 0.8372 0.4944 0.87 0.4944 0.8799 0.4747 0.8973 0.4747 0.8526 0.4573 0.8372 0.4573 0.9126 0.4352 0.9321 0.4352 0.8175 0.5046 0.87 0.5056 0.87 0.5056 0.8799 0.5046 0.8799 0.6391 0.5 0.8602 0.5 0.8602 0.691 0.6391 0.691 0.6391 0.691 0.8602 0.691 0.8253 0.7298 0.6742 0.7298 0.4944 0.87 0.4952 0.87 0.4952 0.8799 0.4944 0.8799 0.375 0.25 0.3938 0.25 0.3938 0.2648 0.375 0.2648 0.375 0.2648 0.3938 0.2648 0.3938 0.4859 0.375 0.4859 0.4944 0.8694 0.4952 0.8694 0.4952 0.87 0.4944 0.87 0.5046 0.8694 0.4952 0.8694 0.4768 0.8458 0.5226 0.8458 0.4944 0.8806 0.4952 0.8806 0.4768 0.9022 0.4728 0.9022 0.5226 0.8458 0.4768 0.8458 0.4586 0.8205 0.5404 0.8205 0.4728 0.9022 0.4768 0.9022 0.4586 0.9236 0.4514 0.9236 0.4944 0.8799 0.4952 0.8799 0.4952 0.8806 0.4944 0.8806 0.5404 0.8205 0.4586 0.8205 0.4274 0.7693 0.571 0.7693 0.4514 0.9236 0.4586 0.9236 0.4274 0.9604 0.4146 0.9604 0.571 0.7693 0.4274 0.7693 0.3938 0.691 0.6039 0.691 0.4146 0.9604 0.4274 0.9604 0.3938 1 0.375 1 0.375 0.5 0.3938 0.5 0.3938 0.691 0.375 0.691 0.375 0.059 0.3938 0.059 0.3938 0.25 0.375 0.25 0.375 0.4859 0.3938 0.4859 0.3938 0.5 0.375 0.5 0.5854 0.7693 0.571 0.7693 0.6039 0.691 0.625 0.691 0.5486 0.8205 0.5404 0.8205 0.571 0.7693 0.5854 0.7693 0.5272 0.8458 0.5226 0.8458 0.5404 0.8205 0.5486 0.8205 0.5056 0.8694 0.5046 0.8694 0.5226 0.8458 0.5272 0.8458 0.4952 0.87 0.5046 0.87 0.5046 0.8799 0.4952 0.8799 0.3938 0.25 0.6039 0.25 0.6039 0.2648 0.3938 0.2648 0.6039 0.2648 0.6039 0.4859 0.6039 0.4859 0.6039 0.2648 0.4952 0.8694 0.5046 0.8694 0.5046 0.87 0.4952 0.87 0.4952 0.8806 0.5046 0.8806 0.5226 0.9022 0.4768 0.9022 0.4768 0.9022 0.5226 0.9022 0.5404 0.9236 0.4586 0.9236 0.4952 0.8799 0.5046 0.8799 0.5046 0.8806 0.4952 0.8806 0.4586 0.9236 0.5404 0.9236 0.571 0.9604 0.4274 0.9604 0.4274 0.9604 0.571 0.9604 0.6039 1 0.3938 1 0.3938 0.5 0.6039 0.5 0.6039 0.691 0.3938 0.691 0.3938 0.059 0.6039 0.059 0.6039 0.25 0.3938 0.25 0.3938 0.4859 0.6039 0.4859 0.6039 0.5 0.3938 0.5 0.3938 0.2648 0.6039 0.2648 0.6039 0.4859 0.3938 0.4859 0.6039 0.4859 0.3938 0.4859 0.3938 0.4859 0.6039 0.4859 0.3938 0.4859 0.3938 0.2648 0.3938 0.2648 0.3938 0.4859 0.3938 0.2648 0.6039 0.2648 0.6039 0.2648 0.3938 0.2648'></textureCoordinate>
                </indexedFaceSet>
              </shape>
            </group>
          </transform>
        </transform>
      </transform>
      <touchSensor id="noseCone4" enabled="false"/>
    </group>
  </transform>

    <!--Wing Rack-->
    <transform translation="8 -0.75 8" scale="0.4 0.5 0.5" rotation="0 1 0 1.5709">
     <transform DEF='Cube_002_TRANSFORM' rotation='0 0.568514 0.822673 3.14159' scale='0.1 0.1 4' translation='-1.55333 0 -1.49706'>
          <transform DEF='Cube_002_ifs_TRANSFORM'>
            <group DEF='group_ME_Cube_003'>
              <shape>
                <appearance>
                  <material DEF='MA_Material' ambientIntensity='0' shininess='0.5' specularColor='0.7 0.7 0.7'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 51 -1 52 53 54 55 -1 56 57 58 59 -1 60 61 62 63 -1 64 65 66 67 -1 68 69 70 71 -1 72 73 74 75 -1 76 77 78 79 -1 80 81 82 83 -1 84 85 86 87 -1 88 89 90 91 -1 92 93 94 95 -1 96 97 98 99 -1 100 101 102 103 -1 104 105 106 107 -1 108 109 110 111 -1 112 113 114 115 -1 116 117 118 119 -1 120 121 122 123 -1 124 125 126 127 -1 128 129 130 131 -1 132 133 134 135 -1 136 137 138 139 -1 140 141 142 143 -1 144 145 146 147 -1 148 149 150 151 -1 152 153 154 155 -1 156 157 158 159 -1 160 161 162 163 -1 164 165 166 167 -1 168 169 170 171 -1 172 173 174 175 -1 176 177 178 179 -1 180 181 182 183 -1 184 185 186 187 -1 188 189 190 191 -1 192 193 194 195 -1 196 197 198 199 -1 200 201 202 203 -1 204 205 206 207 -1 208 209 210 211 -1 212 213 214 215 -1 216 217 218 219 -1 220 221 222 223 -1 224 225 226 227 -1 228 229 230 231 -1 232 233 234 235 -1 236 237 238 239 -1 240 241 242 243 -1 244 245 246 247 -1 248 249 250 251 -1 252 253 254 255 -1 256 257 258 259 -1 260 261 262 263 -1 264 265 266 267 -1 268 269 270 271 -1 272 273 274 275 -1 276 277 278 279 -1 280 281 282 283 -1 284 285 286 287 -1 288 289 290 291 -1 292 293 294 295 -1 296 297 298 299 -1 300 301 302 303 -1 304 305 306 307 -1 308 309 310 311 -1 312 313 314 315 -1 316 317 318 319 -1 320 321 322 323 -1 324 325 326 327 -1 328 329 330 331 -1 332 333 334 335 -1 336 337 338 339 -1 340 341 342 343 -1 344 345 346 347 -1 348 349 350 351 -1 352 353 354 355 -1 356 357 358 359 -1 360 361 362 363 -1 364 365 366 367 -1 368 369 370 371 -1 372 373 374 375 -1 376 377 378 379 -1 380 381 382 383 -1 384 385 386 387 -1 388 389 390 391 -1 392 393 394 395 -1 396 397 398 399 -1 400 401 402 403 -1 404 405 406 407 -1 408 409 410 411 -1 412 413 414 415 -1 416 417 418 419 -1 420 421 422 423 -1 424 425 426 427 -1 428 429 430 431 -1 432 433 434 435 -1 436 437 438 439 -1 440 441 442 443 -1 444 445 446 447 -1 448 449 450 451 -1 452 453 454 455 -1 456 457 458 459 -1 460 461 462 463 -1 464 465 466 467 -1 468 469 470 471 -1 472 473 474 475 -1 476 477 478 479 -1 480 481 482 483 -1 484 485 486 487 -1 488 489 490 491 -1 492 493 494 495 -1 496 497 498 499 -1 500 501 502 503 -1 504 505 506 507 -1 508 509 510 511 -1 512 513 514 515 -1 516 517 518 519 -1 520 521 522 523 -1 524 525 526 527 -1' coordIndex='0 4 6 2 -1 26 2 6 24 -1 24 6 4 27 -1 5 1 3 7 -1 25 0 2 26 -1 27 4 0 25 -1 5 11 8 1 -1 1 8 10 3 -1 7 9 11 5 -1 3 10 9 7 -1 34 15 13 32 -1 32 13 14 33 -1 35 12 15 34 -1 33 14 12 35 -1 39 19 17 37 -1 37 17 18 38 -1 36 16 19 39 -1 38 18 16 36 -1 14 21 23 12 -1 12 23 22 15 -1 13 20 21 14 -1 15 22 20 13 -1 43 27 25 41 -1 41 25 26 42 -1 40 24 27 43 -1 42 26 24 40 -1 45 29 31 47 -1 47 31 30 46 -1 44 28 29 45 -1 46 30 28 44 -1 10 33 35 9 -1 9 35 34 11 -1 8 32 33 10 -1 11 34 32 8 -1 21 38 36 23 -1 23 36 39 22 -1 20 37 38 21 -1 22 39 37 20 -1 29 42 40 31 -1 31 40 43 30 -1 28 41 42 29 -1 30 43 41 28 -1 99 46 44 97 -1 97 44 45 98 -1 96 47 46 99 -1 45 47 69 70 -1 53 49 51 55 -1 55 51 50 54 -1 52 48 49 53 -1 54 50 48 52 -1 113 54 52 111 -1 111 52 53 112 -1 110 55 54 113 -1 112 53 90 115 -1 61 57 59 63 -1 63 59 58 62 -1 60 56 57 61 -1 62 58 56 60 -1 119 62 60 117 -1 117 60 61 118 -1 116 63 62 119 -1 118 61 94 121 -1 18 65 67 16 -1 16 67 66 19 -1 17 64 65 18 -1 19 66 64 17 -1 68 71 75 72 -1 96 51 68 100 -1 51 49 71 68 -1 98 45 70 101 -1 103 74 78 105 -1 70 69 73 74 -1 101 70 74 103 -1 100 68 72 102 -1 76 79 83 80 -1 102 72 76 104 -1 72 75 79 76 -1 74 73 77 78 -1 82 81 85 86 -1 78 77 81 82 -1 105 78 82 107 -1 104 76 80 106 -1 121 94 130 133 -1 107 82 86 109 -1 106 80 84 108 -1 80 83 87 84 -1 85 108 122 123 -1 53 55 89 90 -1 110 59 88 114 -1 59 57 91 88 -1 94 93 129 130 -1 61 63 93 94 -1 116 67 92 120 -1 67 65 95 92 -1 81 106 108 85 -1 83 107 109 87 -1 87 109 108 84 -1 77 104 106 81 -1 79 105 107 83 -1 73 102 104 77 -1 69 100 102 73 -1 71 101 103 75 -1 75 103 105 79 -1 49 98 101 71 -1 47 96 100 69 -1 51 96 99 50 -1 48 97 98 49 -1 50 99 97 48 -1 55 110 114 89 -1 91 115 114 88 -1 57 112 115 91 -1 59 110 113 58 -1 56 111 112 57 -1 58 113 111 56 -1 63 116 120 93 -1 95 121 120 92 -1 65 118 121 95 -1 67 116 119 66 -1 64 117 118 65 -1 66 119 117 64 -1 131 124 123 122 -1 132 127 126 125 -1 133 130 129 128 -1 86 85 123 124 -1 114 115 132 125 -1 89 114 125 126 -1 90 89 126 127 -1 93 120 128 129 -1 108 109 131 122 -1 115 90 127 132 -1 120 121 133 128 -1 109 86 124 131 -1'>
                  <coordinate DEF='coords_ME_Cube_003' point='1 1 1 1 1 -1 1 -1 1 1 -1 -1 -1 1 1 -1 1 -1 -1 -1 1 -1 -1 -1 1 1 -0.87931 -1 -1 -0.87931 1 -1 -0.87931 -1 1 -0.87931 -1 -1 -0.804369 1 1 -0.804369 1 -1 -0.804369 -1 1 -0.804369 -1 -1 0.051845 1 1 0.051845 1 -1 0.051845 -1 1 0.051845 1 1 -0.034934 1 -1 -0.034934 -1 1 -0.034934 -1 -1 -0.034934 -1 -1 0.91906 1 1 0.91906 1 -1 0.91906 -1 1 0.91906 1 1 0.849683 1 -1 0.849683 -1 1 0.849683 -1 -1 0.849683 1 1 -0.841839 1 -1 -0.841839 -1 1 -0.841839 -1 -1 -0.841839 -1 -1 0.008455 1 1 0.008455 1 -1 0.008455 -1 1 0.008455 -1 -1 0.884371 1 1 0.884371 1 -1 0.884371 -1 1 0.884371 1 1 0.78963 1 -1 0.78963 -1 1 0.78963 -1 -1 0.78963 1 1 0.656657 1 -1 0.656657 -1 1 0.656657 -1 -1 0.656657 1 1 0.591856 1 -1 0.591856 -1 1 0.591856 -1 -1 0.591856 1 1 0.45471 1 -1 0.45471 -1 1 0.45471 -1 -1 0.45471 1 1 0.386137 1 -1 0.386137 -1 1 0.386137 -1 -1 0.386137 1 1 0.236134 1 -1 0.236134 -1 1 0.236134 -1 -1 0.236134 -1 -1 0.656657 -1 -1 0.78963 1 -1 0.78963 1 -1 0.656657 -1 -1 0.656657 -1 -1 0.78963 1 -1 0.78963 1 -1 0.656657 -1 -1 0.656657 -1 -1 0.78963 1 -1 0.78963 1 -1 0.656657 -1 -1 0.656657 -1 -1 0.78963 1 -1 0.78963 1 -1 0.656657 -1 -4.40384 0.740369 -1 -3.22439 0.795336 1 -3.22439 0.795336 1 -4.40384 0.740369 -1 -4.40384 0.538422 -1 -3.22439 0.597562 1 -3.22439 0.597562 1 -4.40384 0.538422 -1 -4.40384 0.319846 -1 -3.22439 0.391843 1 -3.22439 0.391843 1 -4.40384 0.319846 -1 -1 0.723144 1 1 0.723144 1 -1 0.723144 -1 1 0.723144 -1 -1 0.723144 1 -1 0.723144 -1 -1 0.723144 1 -1 0.723144 -1 -1 0.723144 1 -1 0.723144 -1 -1 0.723144 1 -1 0.723144 -1 -3.22439 0.72885 1 -3.22439 0.72885 -1 -1 0.523283 1 1 0.523283 1 -1 0.523283 -1 1 0.523283 -1 -3.22439 0.528989 1 -3.22439 0.528989 -1 -1 0.311136 1 1 0.311136 1 -1 0.311136 -1 1 0.311136 -1 -3.22439 0.316842 1 -3.22439 0.316842 -1 -6.56097 0.737409 -1 -6.56097 0.803895 1 -6.56097 0.803895 -1 -6.56097 0.537548 -1 -6.56097 0.606121 1 -6.56097 0.606121 -1 -6.56097 0.3254 -1 -6.56097 0.400402 1 -6.56097 0.400402 1 -6.56097 0.737409 1 -6.56097 0.537548 1 -6.56097 0.3254'></coordinate>
                  <textureCoordinate point='0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.6149 0.75 0.625 0.75 0.625 1 0.6149 1 0.6149 0 0.625 0 0.625 0.25 0.6149 0.25 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.6149 0.5 0.625 0.5 0.625 0.75 0.6149 0.75 0.6149 0.25 0.625 0.25 0.625 0.5 0.6149 0.5 0.375 0.25 0.3901 0.25 0.3901 0.5 0.375 0.5 0.375 0.5 0.3901 0.5 0.3901 0.75 0.375 0.75 0.375 0 0.3901 0 0.3901 0.25 0.375 0.25 0.375 0.75 0.3901 0.75 0.3901 1 0.375 1 0.3948 0.25 0.3995 0.25 0.3995 0.5 0.3948 0.5 0.3948 0.5 0.3995 0.5 0.3995 0.75 0.3948 0.75 0.3948 0 0.3995 0 0.3995 0.25 0.3948 0.25 0.3948 0.75 0.3995 0.75 0.3995 1 0.3948 1 0.5011 0.25 0.5065 0.25 0.5065 0.5 0.5011 0.5 0.5011 0.5 0.5065 0.5 0.5065 0.75 0.5011 0.75 0.5011 0 0.5065 0 0.5065 0.25 0.5011 0.25 0.5011 0.75 0.5065 0.75 0.5065 1 0.5011 1 0.3995 0.75 0.4956 0.75 0.4956 1 0.3995 1 0.3995 0 0.4956 0 0.4956 0.25 0.3995 0.25 0.3995 0.5 0.4956 0.5 0.4956 0.75 0.3995 0.75 0.3995 0.25 0.4956 0.25 0.4956 0.5 0.3995 0.5 0.6105 0.25 0.6149 0.25 0.6149 0.5 0.6105 0.5 0.6105 0.5 0.6149 0.5 0.6149 0.75 0.6105 0.75 0.6105 0 0.6149 0 0.6149 0.25 0.6105 0.25 0.6105 0.75 0.6149 0.75 0.6149 1 0.6105 1 0.5987 0.75 0.6062 0.75 0.6062 1 0.5987 1 0.5987 0 0.6062 0 0.6062 0.25 0.5987 0.25 0.5987 0.5 0.6062 0.5 0.6062 0.75 0.5987 0.75 0.5987 0.25 0.6062 0.25 0.6062 0.5 0.5987 0.5 0.3901 0.75 0.3948 0.75 0.3948 1 0.3901 1 0.3901 0 0.3948 0 0.3948 0.25 0.3901 0.25 0.3901 0.5 0.3948 0.5 0.3948 0.75 0.3901 0.75 0.3901 0.25 0.3948 0.25 0.3948 0.5 0.3901 0.5 0.4956 0.75 0.5011 0.75 0.5011 1 0.4956 1 0.4956 0 0.5011 0 0.5011 0.25 0.4956 0.25 0.4956 0.5 0.5011 0.5 0.5011 0.75 0.4956 0.75 0.4956 0.25 0.5011 0.25 0.5011 0.5 0.4956 0.5 0.6062 0.75 0.6105 0.75 0.6105 1 0.6062 1 0.6062 0 0.6105 0 0.6105 0.25 0.6062 0.25 0.6062 0.5 0.6105 0.5 0.6105 0.75 0.6062 0.75 0.6062 0.25 0.6105 0.25 0.6105 0.5 0.6062 0.5 0.5904 0.25 0.5987 0.25 0.5987 0.5 0.5904 0.5 0.5904 0.5 0.5987 0.5 0.5987 0.75 0.5904 0.75 0.5904 0 0.5987 0 0.5987 0.25 0.5904 0.25 0.5987 0.75 0.5987 1 0.5987 1 0.5987 0.75 0.574 0.75 0.5821 0.75 0.5821 1 0.574 1 0.574 0 0.5821 0 0.5821 0.25 0.574 0.25 0.574 0.5 0.5821 0.5 0.5821 0.75 0.574 0.75 0.574 0.25 0.5821 0.25 0.5821 0.5 0.574 0.5 0.5654 0.25 0.574 0.25 0.574 0.5 0.5654 0.5 0.5654 0.5 0.574 0.5 0.574 0.75 0.5654 0.75 0.5654 0 0.574 0 0.574 0.25 0.5654 0.25 0.5654 0.75 0.574 0.75 0.574 0.75 0.5654 0.75 0.5483 0.75 0.5568 0.75 0.5568 1 0.5483 1 0.5483 0 0.5568 0 0.5568 0.25 0.5483 0.25 0.5483 0.5 0.5568 0.5 0.5568 0.75 0.5483 0.75 0.5483 0.25 0.5568 0.25 0.5568 0.5 0.5483 0.5 0.5389 0.25 0.5483 0.25 0.5483 0.5 0.5389 0.5 0.5389 0.5 0.5483 0.5 0.5483 0.75 0.5389 0.75 0.5389 0 0.5483 0 0.5483 0.25 0.5389 0.25 0.5389 0.75 0.5483 0.75 0.5483 0.75 0.5389 0.75 0.5065 0.75 0.5295 0.75 0.5295 1 0.5065 1 0.5065 0 0.5295 0 0.5295 0.25 0.5065 0.25 0.5065 0.5 0.5295 0.5 0.5295 0.75 0.5065 0.75 0.5065 0.25 0.5295 0.25 0.5295 0.5 0.5065 0.5 0.5821 1 0.5821 0.75 0.5821 0.75 0.5821 1 0.5904 0 0.5821 0 0.5821 0 0.5945 0 0.5821 1 0.5821 0.75 0.5821 0.75 0.5821 1 0.5904 0.75 0.5987 0.75 0.5987 0.75 0.5862 0.75 0.5862 0.75 0.5987 0.75 0.5987 0.75 0.5862 0.75 0.5987 0.75 0.5987 1 0.5987 1 0.5987 0.75 0.5862 0.75 0.5987 0.75 0.5987 0.75 0.5862 0.75 0.5945 0 0.5821 0 0.5821 0 0.5945 0 0.5821 1 0.5821 0.75 0.5821 0.75 0.5821 1 0.5945 0 0.5821 0 0.5821 0 0.5945 0 0.5821 1 0.5821 0.75 0.5821 0.75 0.5821 1 0.5987 0.75 0.5987 1 0.5987 1 0.5987 0.75 0.5987 0.75 0.5987 1 0.5987 1 0.5987 0.75 0.5987 0.75 0.5987 1 0.5987 1 0.5987 0.75 0.5862 0.75 0.5987 0.75 0.5987 0.75 0.5904 0.75 0.5945 0 0.5821 0 0.5821 0 0.5904 0 0.5389 0.75 0.5483 0.75 0.5483 0.75 0.5389 0.75 0.5904 0.75 0.5987 0.75 0.5987 0.75 0.5904 0.75 0.5904 0 0.5821 0 0.5821 0 0.5904 0 0.5821 1 0.5821 0.75 0.5821 0.75 0.5821 1 0.5987 0 0.5904 0 0.5904 0 0.5987 0 0.574 0.75 0.574 1 0.574 1 0.574 0.75 0.5654 0 0.5568 0 0.5568 0 0.5654 0 0.5568 1 0.5568 0.75 0.5568 0.75 0.5568 1 0.5483 0.75 0.5483 1 0.5483 1 0.5483 0.75 0.5483 0.75 0.5483 1 0.5483 1 0.5483 0.75 0.5389 0 0.5295 0 0.5295 0 0.5389 0 0.5295 1 0.5295 0.75 0.5295 0.75 0.5295 1 0.5987 0 0.5904 0 0.5904 0 0.5987 0 0.5821 0.75 0.5904 0.75 0.5904 0.75 0.5821 0.75 0.5821 0.75 0.5904 0.75 0.5904 1 0.5821 1 0.5987 0 0.5945 0 0.5904 0 0.5987 0 0.5821 0.75 0.5862 0.75 0.5904 0.75 0.5821 0.75 0.5987 0 0.5945 0 0.5945 0 0.5987 0 0.5987 0 0.5945 0 0.5945 0 0.5987 0 0.5821 0.75 0.5862 0.75 0.5862 0.75 0.5821 0.75 0.5821 0.75 0.5862 0.75 0.5862 0.75 0.5821 0.75 0.5821 0.75 0.5904 0.75 0.5862 0.75 0.5821 0.75 0.5987 0 0.5904 0 0.5945 0 0.5987 0 0.5821 0 0.5904 0 0.5904 0.25 0.5821 0.25 0.5821 0.5 0.5904 0.5 0.5904 0.75 0.5821 0.75 0.5821 0.25 0.5904 0.25 0.5904 0.5 0.5821 0.5 0.574 0 0.5654 0 0.5654 0 0.574 0 0.5568 0.75 0.5654 0.75 0.5654 1 0.5568 1 0.5568 0.75 0.5654 0.75 0.5654 0.75 0.5568 0.75 0.5568 0 0.5654 0 0.5654 0.25 0.5568 0.25 0.5568 0.5 0.5654 0.5 0.5654 0.75 0.5568 0.75 0.5568 0.25 0.5654 0.25 0.5654 0.5 0.5568 0.5 0.5483 0 0.5389 0 0.5389 0 0.5483 0 0.5295 0.75 0.5389 0.75 0.5389 1 0.5295 1 0.5295 0.75 0.5389 0.75 0.5389 0.75 0.5295 0.75 0.5295 0 0.5389 0 0.5389 0.25 0.5295 0.25 0.5295 0.5 0.5389 0.5 0.5389 0.75 0.5295 0.75 0.5295 0.25 0.5389 0.25 0.5389 0.5 0.5295 0.5 0.5904 0.75 0.5987 0.75 0.5987 1 0.5904 1 0.5654 0.75 0.574 0.75 0.574 1 0.5654 1 0.5389 0.75 0.5483 0.75 0.5483 1 0.5389 1 0.5987 0.75 0.5987 1 0.5987 1 0.5987 0.75 0.5654 1 0.5654 0.75 0.5654 0.75 0.5654 1 0.574 0 0.5654 0 0.5654 0 0.574 0 0.574 0.75 0.574 1 0.574 1 0.574 0.75 0.5483 0 0.5389 0 0.5389 0 0.5483 0 0.5904 1 0.5904 0.75 0.5904 0.75 0.5904 1 0.5654 0.75 0.574 0.75 0.574 0.75 0.5654 0.75 0.5389 1 0.5389 0.75 0.5389 0.75 0.5389 1 0.5904 0.75 0.5987 0.75 0.5987 0.75 0.5904 0.75'></textureCoordinate>
                </indexedFaceSet>
              </shape>
            </group>
          </transform>
        </transform>
        <transform DEF='Cube_005_TRANSFORM' rotation='0 0.568562 0.822641 3.14159' scale='0.1 0.1 4' translation='1.45464 0 -1.49706'>
          <transform DEF='Cube_005_ifs_TRANSFORM'>
            <group DEF='group_ME_Cube_006'>
              <shape>
                <appearance>
                  <material USE='MA_Material'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 51 -1 52 53 54 55 -1 56 57 58 59 -1 60 61 62 63 -1 64 65 66 67 -1 68 69 70 71 -1 72 73 74 75 -1 76 77 78 79 -1 80 81 82 83 -1 84 85 86 87 -1 88 89 90 91 -1 92 93 94 95 -1 96 97 98 99 -1 100 101 102 103 -1 104 105 106 107 -1 108 109 110 111 -1 112 113 114 115 -1 116 117 118 119 -1 120 121 122 123 -1 124 125 126 127 -1 128 129 130 131 -1 132 133 134 135 -1 136 137 138 139 -1 140 141 142 143 -1 144 145 146 147 -1 148 149 150 151 -1 152 153 154 155 -1 156 157 158 159 -1 160 161 162 163 -1 164 165 166 167 -1 168 169 170 171 -1 172 173 174 175 -1 176 177 178 179 -1 180 181 182 183 -1 184 185 186 187 -1 188 189 190 191 -1 192 193 194 195 -1 196 197 198 199 -1 200 201 202 203 -1 204 205 206 207 -1 208 209 210 211 -1 212 213 214 215 -1 216 217 218 219 -1 220 221 222 223 -1 224 225 226 227 -1 228 229 230 231 -1 232 233 234 235 -1 236 237 238 239 -1 240 241 242 243 -1 244 245 246 247 -1 248 249 250 251 -1 252 253 254 255 -1 256 257 258 259 -1 260 261 262 263 -1 264 265 266 267 -1 268 269 270 271 -1 272 273 274 275 -1 276 277 278 279 -1 280 281 282 283 -1 284 285 286 287 -1 288 289 290 291 -1 292 293 294 295 -1 296 297 298 299 -1 300 301 302 303 -1 304 305 306 307 -1 308 309 310 311 -1 312 313 314 315 -1 316 317 318 319 -1 320 321 322 323 -1 324 325 326 327 -1 328 329 330 331 -1 332 333 334 335 -1 336 337 338 339 -1 340 341 342 343 -1 344 345 346 347 -1 348 349 350 351 -1 352 353 354 355 -1 356 357 358 359 -1 360 361 362 363 -1 364 365 366 367 -1 368 369 370 371 -1 372 373 374 375 -1 376 377 378 379 -1 380 381 382 383 -1 384 385 386 387 -1 388 389 390 391 -1 392 393 394 395 -1 396 397 398 399 -1 400 401 402 403 -1 404 405 406 407 -1 408 409 410 411 -1 412 413 414 415 -1 416 417 418 419 -1 420 421 422 423 -1 424 425 426 427 -1 428 429 430 431 -1 432 433 434 435 -1 436 437 438 439 -1 440 441 442 443 -1 444 445 446 447 -1 448 449 450 451 -1 452 453 454 455 -1 456 457 458 459 -1 460 461 462 463 -1 464 465 466 467 -1 468 469 470 471 -1 472 473 474 475 -1 476 477 478 479 -1 480 481 482 483 -1 484 485 486 487 -1 488 489 490 491 -1 492 493 494 495 -1 496 497 498 499 -1 500 501 502 503 -1 504 505 506 507 -1 508 509 510 511 -1 512 513 514 515 -1 516 517 518 519 -1 520 521 522 523 -1 524 525 526 527 -1 528 529 530 531 -1 532 533 534 535 -1 536 537 538 539 -1 540 541 542 543 -1 544 545 546 547 -1 548 549 550 551 -1 552 553 554 555 -1 556 557 558 559 -1 560 561 562 563 -1 564 565 566 567 -1 568 569 570 571 -1 572 573 574 575 -1' coordIndex='0 4 6 2 -1 26 2 6 24 -1 24 6 4 27 -1 5 1 3 7 -1 25 0 2 26 -1 27 4 0 25 -1 5 11 8 1 -1 1 8 10 3 -1 7 9 11 5 -1 3 10 9 7 -1 34 15 13 32 -1 32 13 14 33 -1 35 12 15 34 -1 33 14 12 35 -1 39 19 17 37 -1 37 17 18 38 -1 36 16 19 39 -1 38 18 16 36 -1 14 21 23 12 -1 12 23 22 15 -1 13 20 21 14 -1 15 22 20 13 -1 43 27 25 41 -1 41 25 26 42 -1 40 24 27 43 -1 42 26 24 40 -1 57 29 31 59 -1 59 31 30 58 -1 56 28 29 57 -1 58 30 28 56 -1 10 33 35 9 -1 9 35 34 11 -1 32 33 46 44 -1 11 34 32 8 -1 21 38 36 23 -1 23 36 39 22 -1 21 20 49 51 -1 22 39 37 20 -1 29 42 40 31 -1 31 40 43 30 -1 42 29 55 54 -1 30 43 41 28 -1 45 44 46 47 -1 33 10 47 46 -1 8 32 44 45 -1 10 8 45 47 -1 49 48 50 51 -1 20 37 48 49 -1 37 38 50 48 -1 38 21 51 50 -1 53 52 54 55 -1 41 42 54 52 -1 29 28 53 55 -1 28 41 52 53 -1 111 58 56 109 -1 109 56 57 110 -1 108 59 58 111 -1 110 57 82 113 -1 65 61 63 67 -1 67 63 62 66 -1 64 60 61 65 -1 66 62 60 64 -1 125 66 64 123 -1 123 64 65 124 -1 122 67 66 125 -1 124 65 102 127 -1 73 69 71 75 -1 75 71 70 74 -1 72 68 69 73 -1 74 70 68 72 -1 131 74 72 129 -1 129 72 73 130 -1 128 75 74 131 -1 128 79 104 132 -1 18 77 79 16 -1 16 79 78 19 -1 17 76 77 18 -1 19 78 76 17 -1 80 83 87 84 -1 57 59 81 82 -1 108 63 80 112 -1 63 61 83 80 -1 86 85 89 90 -1 82 81 85 86 -1 113 82 86 115 -1 112 80 84 114 -1 117 90 94 119 -1 115 86 90 117 -1 114 84 88 116 -1 84 87 91 88 -1 92 95 99 96 -1 116 88 92 118 -1 88 91 95 92 -1 90 89 93 94 -1 126 127 144 137 -1 94 93 97 98 -1 119 94 98 121 -1 118 92 96 120 -1 98 97 135 136 -1 65 67 101 102 -1 122 71 100 126 -1 71 69 103 100 -1 133 106 142 145 -1 79 77 107 104 -1 130 73 106 133 -1 73 75 105 106 -1 93 118 120 97 -1 95 119 121 99 -1 99 121 120 96 -1 89 116 118 93 -1 85 114 116 89 -1 87 115 117 91 -1 91 117 119 95 -1 81 112 114 85 -1 83 113 115 87 -1 59 108 112 81 -1 61 110 113 83 -1 63 108 111 62 -1 60 109 110 61 -1 62 111 109 60 -1 67 122 126 101 -1 103 127 126 100 -1 69 124 127 103 -1 71 122 125 70 -1 68 123 124 69 -1 70 125 123 68 -1 77 130 133 107 -1 107 133 132 104 -1 75 128 132 105 -1 79 128 131 78 -1 76 129 130 77 -1 78 131 129 76 -1 143 136 135 134 -1 144 139 138 137 -1 145 142 141 140 -1 101 126 137 138 -1 102 101 138 139 -1 105 132 140 141 -1 120 121 143 134 -1 127 102 139 144 -1 132 133 145 140 -1 121 98 136 143 -1 97 120 134 135 -1 106 105 141 142 -1'>
                  <coordinate DEF='coords_ME_Cube_006' point='1 1 1 1 1 -1 1 -1 1 1 -1 -1 -1 1 1 -1 1 -1 -1 -1 1 -1 -1 -1 1 1 -0.87931 -1 -1 -0.87931 1 -1 -0.87931 -1 1 -0.87931 -1 -1 -0.804369 1 1 -0.804369 1 -1 -0.804369 -1 1 -0.804369 -1 -1 0.051845 1 1 0.051845 1 -1 0.051845 -1 1 0.051845 1 1 -0.034934 1 -1 -0.034934 -1 1 -0.034934 -1 -1 -0.034934 -1 -1 0.91906 1 1 0.91906 1 -1 0.91906 -1 1 0.91906 1 1 0.849683 1 -1 0.849683 -1 1 0.849683 -1 -1 0.849683 1 1 -0.841839 1 -1 -0.841839 -1 1 -0.841839 -1 -1 -0.841839 -1 -1 0.008455 1 1 0.008455 1 -1 0.008455 -1 1 0.008455 -1 -1 0.884371 1 1 0.884371 1 -1 0.884371 -1 1 0.884371 29.172 1 -0.841839 29.172 1 -0.87931 29.172 -1 -0.841839 29.172 -1 -0.87931 29.1834 1 0.008455 29.1834 1 -0.034934 29.1834 -1 0.008455 29.1834 -1 -0.034934 29.2983 1 0.884371 29.2983 1 0.849683 29.2983 -1 0.884371 29.2983 -1 0.849683 1 1 0.78963 1 -1 0.78963 -1 1 0.78963 -1 -1 0.78963 1 1 0.652368 1 -1 0.652368 -1 1 0.652368 -1 -1 0.652368 1 1 0.588026 1 -1 0.588026 -1 1 0.588026 -1 -1 0.588026 1 1 0.445333 1 -1 0.445333 -1 1 0.445333 -1 -1 0.445333 1 1 0.372623 1 -1 0.372623 -1 1 0.372623 -1 -1 0.372623 1 1 0.225238 1 -1 0.225238 -1 1 0.225238 -1 -1 0.225238 -1 -1 0.652368 -1 -1 0.78963 1 -1 0.78963 1 -1 0.652368 -1 -1 0.652368 -1 -1 0.78963 1 -1 0.78963 1 -1 0.652368 -1 -1 0.652368 -1 -1 0.78963 1 -1 0.78963 1 -1 0.652368 -1 -1 0.652368 -1 -1 0.78963 1 -1 0.78963 1 -1 0.652368 -1 -4.40345 0.736089 -1 -3.22436 0.795343 1 -3.22436 0.795343 1 -4.40345 0.736089 -1 -4.40345 0.529054 -1 -3.22436 0.593738 1 -3.22436 0.593738 1 -4.40345 0.529054 -1 -4.40345 0.30896 -1 -3.22436 0.378335 1 -3.22436 0.378335 1 -4.40345 0.30896 -1 -1 0.720999 1 1 0.720999 1 -1 0.720999 -1 1 0.720999 -1 -1 0.720999 1 -1 0.720999 -1 -1 0.720999 1 -1 0.720999 -1 -1 0.720999 1 -1 0.720999 -1 -1 0.720999 1 -1 0.720999 -1 -3.22436 0.726711 1 -3.22436 0.726711 -1 -1 0.516679 1 1 0.516679 1 -1 0.516679 -1 1 0.516679 -1 -3.22436 0.522392 1 -3.22436 0.522392 -1 -1 0.298931 1 1 0.298931 1 -1 0.298931 -1 1 0.298931 -1 -3.22436 0.304643 1 -3.22436 0.304643 -1 -6.56091 0.73528 -1 -6.56091 0.803911 1 -6.56091 0.803911 -1 -6.56091 0.53096 -1 -6.56091 0.602307 1 -6.56091 0.602307 -1 -6.56091 0.313211 -1 -6.56091 0.386904 1 -6.56091 0.386904 1 -6.56091 0.73528 1 -6.56091 0.53096 1 -6.56091 0.313211'></coordinate>
                  <textureCoordinate point='0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.6149 0.75 0.625 0.75 0.625 1 0.6149 1 0.6149 0 0.625 0 0.625 0.25 0.6149 0.25 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.6149 0.5 0.625 0.5 0.625 0.75 0.6149 0.75 0.6149 0.25 0.625 0.25 0.625 0.5 0.6149 0.5 0.375 0.25 0.3901 0.25 0.3901 0.5 0.375 0.5 0.375 0.5 0.3901 0.5 0.3901 0.75 0.375 0.75 0.375 0 0.3901 0 0.3901 0.25 0.375 0.25 0.375 0.75 0.3901 0.75 0.3901 1 0.375 1 0.3948 0.25 0.3995 0.25 0.3995 0.5 0.3948 0.5 0.3948 0.5 0.3995 0.5 0.3995 0.75 0.3948 0.75 0.3948 0 0.3995 0 0.3995 0.25 0.3948 0.25 0.3948 0.75 0.3995 0.75 0.3995 1 0.3948 1 0.5011 0.25 0.5065 0.25 0.5065 0.5 0.5011 0.5 0.5011 0.5 0.5065 0.5 0.5065 0.75 0.5011 0.75 0.5011 0 0.5065 0 0.5065 0.25 0.5011 0.25 0.5011 0.75 0.5065 0.75 0.5065 1 0.5011 1 0.3995 0.75 0.4956 0.75 0.4956 1 0.3995 1 0.3995 0 0.4956 0 0.4956 0.25 0.3995 0.25 0.3995 0.5 0.4956 0.5 0.4956 0.75 0.3995 0.75 0.3995 0.25 0.4956 0.25 0.4956 0.5 0.3995 0.5 0.6105 0.25 0.6149 0.25 0.6149 0.5 0.6105 0.5 0.6105 0.5 0.6149 0.5 0.6149 0.75 0.6105 0.75 0.6105 0 0.6149 0 0.6149 0.25 0.6105 0.25 0.6105 0.75 0.6149 0.75 0.6149 1 0.6105 1 0.5987 0.75 0.6062 0.75 0.6062 1 0.5987 1 0.5987 0 0.6062 0 0.6062 0.25 0.5987 0.25 0.5987 0.5 0.6062 0.5 0.6062 0.75 0.5987 0.75 0.5987 0.25 0.6062 0.25 0.6062 0.5 0.5987 0.5 0.3901 0.75 0.3948 0.75 0.3948 1 0.3901 1 0.3901 0 0.3948 0 0.3948 0.25 0.3901 0.25 0.3948 0.5 0.3948 0.75 0.3948 0.75 0.3948 0.5 0.3901 0.25 0.3948 0.25 0.3948 0.5 0.3901 0.5 0.4956 0.75 0.5011 0.75 0.5011 1 0.4956 1 0.4956 0 0.5011 0 0.5011 0.25 0.4956 0.25 0.4956 0.75 0.4956 0.5 0.4956 0.5 0.4956 0.75 0.4956 0.25 0.5011 0.25 0.5011 0.5 0.4956 0.5 0.6062 0.75 0.6105 0.75 0.6105 1 0.6062 1 0.6062 0 0.6105 0 0.6105 0.25 0.6062 0.25 0.6105 0.75 0.6062 0.75 0.6062 0.75 0.6105 0.75 0.6062 0.25 0.6105 0.25 0.6105 0.5 0.6062 0.5 0.3901 0.5 0.3948 0.5 0.3948 0.75 0.3901 0.75 0.3948 0.75 0.3901 0.75 0.3901 0.75 0.3948 0.75 0.3901 0.5 0.3948 0.5 0.3948 0.5 0.3901 0.5 0.3901 0.75 0.3901 0.5 0.3901 0.5 0.3901 0.75 0.4956 0.5 0.5011 0.5 0.5011 0.75 0.4956 0.75 0.4956 0.5 0.5011 0.5 0.5011 0.5 0.4956 0.5 0.5011 0.5 0.5011 0.75 0.5011 0.75 0.5011 0.5 0.5011 0.75 0.4956 0.75 0.4956 0.75 0.5011 0.75 0.6062 0.5 0.6105 0.5 0.6105 0.75 0.6062 0.75 0.6105 0.5 0.6105 0.75 0.6105 0.75 0.6105 0.5 0.6062 0.75 0.6062 0.5 0.6062 0.5 0.6062 0.75 0.6062 0.5 0.6105 0.5 0.6105 0.5 0.6062 0.5 0.5901 0.25 0.5987 0.25 0.5987 0.5 0.5901 0.5 0.5901 0.5 0.5987 0.5 0.5987 0.75 0.5901 0.75 0.5901 0 0.5987 0 0.5987 0.25 0.5901 0.25 0.5901 0.75 0.5987 0.75 0.5987 0.75 0.5858 0.75 0.5735 0.75 0.5815 0.75 0.5815 1 0.5735 1 0.5735 0 0.5815 0 0.5815 0.25 0.5735 0.25 0.5735 0.5 0.5815 0.5 0.5815 0.75 0.5735 0.75 0.5735 0.25 0.5815 0.25 0.5815 0.5 0.5735 0.5 0.5646 0.25 0.5735 0.25 0.5735 0.5 0.5646 0.5 0.5646 0.5 0.5735 0.5 0.5735 0.75 0.5646 0.75 0.5646 0 0.5735 0 0.5735 0.25 0.5646 0.25 0.5646 0.75 0.5735 0.75 0.5735 0.75 0.5646 0.75 0.5466 0.75 0.5557 0.75 0.5557 1 0.5466 1 0.5466 0 0.5557 0 0.5557 0.25 0.5466 0.25 0.5466 0.5 0.5557 0.5 0.5557 0.75 0.5466 0.75 0.5466 0.25 0.5557 0.25 0.5557 0.5 0.5466 0.5 0.5374 0.25 0.5466 0.25 0.5466 0.5 0.5374 0.5 0.5374 0.5 0.5466 0.5 0.5466 0.75 0.5374 0.75 0.5374 0 0.5466 0 0.5466 0.25 0.5374 0.25 0.5374 0 0.5282 0 0.5282 0 0.5374 0 0.5065 0.75 0.5282 0.75 0.5282 1 0.5065 1 0.5065 0 0.5282 0 0.5282 0.25 0.5065 0.25 0.5065 0.5 0.5282 0.5 0.5282 0.75 0.5065 0.75 0.5065 0.25 0.5282 0.25 0.5282 0.5 0.5065 0.5 0.5815 1 0.5815 0.75 0.5815 0.75 0.5815 1 0.5987 0.75 0.5987 1 0.5987 1 0.5987 0.75 0.5901 0 0.5815 0 0.5815 0 0.5944 0 0.5815 1 0.5815 0.75 0.5815 0.75 0.5815 1 0.5987 0.75 0.5987 1 0.5987 1 0.5987 0.75 0.5987 0.75 0.5987 1 0.5987 1 0.5987 0.75 0.5858 0.75 0.5987 0.75 0.5987 0.75 0.5858 0.75 0.5944 0 0.5815 0 0.5815 0 0.5944 0 0.5858 0.75 0.5987 0.75 0.5987 0.75 0.5901 0.75 0.5858 0.75 0.5987 0.75 0.5987 0.75 0.5858 0.75 0.5944 0 0.5815 0 0.5815 0 0.5944 0 0.5815 1 0.5815 0.75 0.5815 0.75 0.5815 1 0.5815 1 0.5815 0.75 0.5815 0.75 0.5815 1 0.5944 0 0.5815 0 0.5815 0 0.5901 0 0.5815 1 0.5815 0.75 0.5815 0.75 0.5815 1 0.5987 0.75 0.5987 1 0.5987 1 0.5987 0.75 0.5646 1 0.5646 0.75 0.5646 0.75 0.5646 1 0.5987 0.75 0.5987 1 0.5987 1 0.5987 0.75 0.5901 0.75 0.5987 0.75 0.5987 0.75 0.5901 0.75 0.5901 0 0.5815 0 0.5815 0 0.5901 0 0.5987 0.75 0.5987 1 0.5987 1 0.5987 0.75 0.5735 0.75 0.5735 1 0.5735 1 0.5735 0.75 0.5646 0 0.5557 0 0.5557 0 0.5646 0 0.5557 1 0.5557 0.75 0.5557 0.75 0.5557 1 0.5374 0.75 0.5466 0.75 0.5466 0.75 0.5374 0.75 0.5282 1 0.5282 0.75 0.5282 0.75 0.5282 1 0.5374 0.75 0.5466 0.75 0.5466 0.75 0.5374 0.75 0.5466 0.75 0.5466 1 0.5466 1 0.5466 0.75 0.5987 0 0.5901 0 0.5901 0 0.5987 0 0.5815 0.75 0.5901 0.75 0.5901 0.75 0.5815 0.75 0.5815 0.75 0.5901 0.75 0.5901 1 0.5815 1 0.5987 0 0.5944 0 0.5901 0 0.5987 0 0.5987 0 0.5944 0 0.5944 0 0.5987 0 0.5815 0.75 0.5858 0.75 0.5858 0.75 0.5815 0.75 0.5815 0.75 0.5858 0.75 0.5901 0.75 0.5815 0.75 0.5987 0 0.5944 0 0.5944 0 0.5987 0 0.5815 0.75 0.5858 0.75 0.5858 0.75 0.5815 0.75 0.5987 0 0.5901 0 0.5944 0 0.5987 0 0.5815 0.75 0.5901 0.75 0.5858 0.75 0.5815 0.75 0.5815 0 0.5901 0 0.5901 0.25 0.5815 0.25 0.5815 0.5 0.5901 0.5 0.5901 0.75 0.5815 0.75 0.5815 0.25 0.5901 0.25 0.5901 0.5 0.5815 0.5 0.5735 0 0.5646 0 0.5646 0 0.5735 0 0.5557 0.75 0.5646 0.75 0.5646 1 0.5557 1 0.5557 0.75 0.5646 0.75 0.5646 0.75 0.5557 0.75 0.5557 0 0.5646 0 0.5646 0.25 0.5557 0.25 0.5557 0.5 0.5646 0.5 0.5646 0.75 0.5557 0.75 0.5557 0.25 0.5646 0.25 0.5646 0.5 0.5557 0.5 0.5282 0.75 0.5374 0.75 0.5374 0.75 0.5282 0.75 0.5282 0.75 0.5374 0.75 0.5374 1 0.5282 1 0.5466 0 0.5374 0 0.5374 0 0.5466 0 0.5282 0 0.5374 0 0.5374 0.25 0.5282 0.25 0.5282 0.5 0.5374 0.5 0.5374 0.75 0.5282 0.75 0.5282 0.25 0.5374 0.25 0.5374 0.5 0.5282 0.5 0.5901 0.75 0.5987 0.75 0.5987 1 0.5901 1 0.5646 0.75 0.5735 0.75 0.5735 1 0.5646 1 0.5374 0.75 0.5466 0.75 0.5466 1 0.5374 1 0.5735 0 0.5646 0 0.5646 0 0.5735 0 0.5735 0.75 0.5735 1 0.5735 1 0.5735 0.75 0.5466 0 0.5374 0 0.5374 0 0.5466 0 0.5901 1 0.5901 0.75 0.5901 0.75 0.5901 1 0.5646 0.75 0.5735 0.75 0.5735 0.75 0.5646 0.75 0.5374 1 0.5374 0.75 0.5374 0.75 0.5374 1 0.5901 0.75 0.5987 0.75 0.5987 0.75 0.5901 0.75 0.5987 0 0.5901 0 0.5901 0 0.5987 0 0.5466 0.75 0.5466 1 0.5466 1 0.5466 0.75'></textureCoordinate>
                </indexedFaceSet>
              </shape>
            </group>
          </transform>
        </transform>
        <transform DEF='Cube_008_TRANSFORM' rotation='0 0.820542 0.571586 3.14159' scale='0.1 0.1 4' translation='-1.55333 0 1.4842'>
          <transform DEF='Cube_008_ifs_TRANSFORM' translation='2e-06 1e-06 0'>
            <group DEF='group_ME_Cube_009'>
              <shape>
                <appearance>
                  <material USE='MA_Material'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 51 -1 52 53 54 55 -1 56 57 58 59 -1 60 61 62 63 -1 64 65 66 67 -1 68 69 70 71 -1 72 73 74 75 -1 76 77 78 79 -1 80 81 82 83 -1 84 85 86 87 -1 88 89 90 91 -1 92 93 94 95 -1 96 97 98 99 -1 100 101 102 103 -1 104 105 106 107 -1 108 109 110 111 -1 112 113 114 115 -1 116 117 118 119 -1 120 121 122 123 -1 124 125 126 127 -1 128 129 130 131 -1 132 133 134 135 -1 136 137 138 139 -1 140 141 142 143 -1 144 145 146 147 -1 148 149 150 151 -1 152 153 154 155 -1 156 157 158 159 -1 160 161 162 163 -1 164 165 166 167 -1 168 169 170 171 -1 172 173 174 175 -1 176 177 178 179 -1 180 181 182 183 -1 184 185 186 187 -1 188 189 190 191 -1 192 193 194 195 -1 196 197 198 199 -1 200 201 202 203 -1 204 205 206 207 -1 208 209 210 211 -1 212 213 214 215 -1 216 217 218 219 -1 220 221 222 223 -1 224 225 226 227 -1 228 229 230 231 -1 232 233 234 235 -1 236 237 238 239 -1 240 241 242 243 -1 244 245 246 247 -1 248 249 250 251 -1 252 253 254 255 -1 256 257 258 259 -1 260 261 262 263 -1 264 265 266 267 -1 268 269 270 271 -1 272 273 274 275 -1 276 277 278 279 -1 280 281 282 283 -1 284 285 286 287 -1 288 289 290 291 -1 292 293 294 295 -1 296 297 298 299 -1 300 301 302 303 -1 304 305 306 307 -1 308 309 310 311 -1 312 313 314 315 -1 316 317 318 319 -1 320 321 322 323 -1 324 325 326 327 -1 328 329 330 331 -1 332 333 334 335 -1 336 337 338 339 -1 340 341 342 343 -1 344 345 346 347 -1 348 349 350 351 -1 352 353 354 355 -1 356 357 358 359 -1 360 361 362 363 -1 364 365 366 367 -1 368 369 370 371 -1 372 373 374 375 -1 376 377 378 379 -1 380 381 382 383 -1 384 385 386 387 -1 388 389 390 391 -1 392 393 394 395 -1 396 397 398 399 -1 400 401 402 403 -1 404 405 406 407 -1 408 409 410 411 -1 412 413 414 415 -1 416 417 418 419 -1 420 421 422 423 -1 424 425 426 427 -1 428 429 430 431 -1' coordIndex='0 4 6 2 -1 26 2 6 24 -1 24 6 4 27 -1 5 1 3 7 -1 25 0 2 26 -1 27 4 0 25 -1 5 11 8 1 -1 1 8 10 3 -1 7 9 11 5 -1 3 10 9 7 -1 34 15 13 32 -1 32 13 14 33 -1 35 12 15 34 -1 33 14 12 35 -1 39 19 17 37 -1 37 17 18 38 -1 36 16 19 39 -1 38 18 16 36 -1 14 21 23 12 -1 12 23 22 15 -1 13 20 21 14 -1 15 22 20 13 -1 43 27 25 41 -1 41 25 26 42 -1 40 24 27 43 -1 42 26 24 40 -1 45 29 31 47 -1 47 31 30 46 -1 44 28 29 45 -1 46 30 28 44 -1 10 33 35 9 -1 9 35 34 11 -1 8 32 33 10 -1 11 34 32 8 -1 21 38 36 23 -1 23 36 39 22 -1 20 37 38 21 -1 22 39 37 20 -1 29 42 40 31 -1 31 40 43 30 -1 28 41 42 29 -1 30 43 41 28 -1 93 48 70 96 -1 93 44 45 94 -1 92 47 46 95 -1 94 45 47 92 -1 53 49 51 55 -1 55 51 50 54 -1 52 48 49 53 -1 54 50 48 52 -1 83 54 72 85 -1 81 52 53 82 -1 80 55 54 83 -1 82 53 55 80 -1 61 57 59 63 -1 63 59 58 62 -1 60 56 57 61 -1 62 58 56 60 -1 89 62 76 91 -1 87 60 61 88 -1 86 63 62 89 -1 88 61 63 86 -1 18 65 67 16 -1 16 67 66 19 -1 17 64 65 18 -1 19 66 64 17 -1 90 91 107 106 -1 46 44 69 68 -1 48 50 71 70 -1 95 46 68 97 -1 97 68 98 109 -1 81 56 74 84 -1 54 52 73 72 -1 56 58 75 74 -1 85 72 100 105 -1 87 64 78 90 -1 62 60 77 76 -1 64 66 79 78 -1 52 81 84 73 -1 75 85 84 74 -1 57 82 80 59 -1 59 80 83 58 -1 56 81 82 57 -1 58 83 85 75 -1 60 87 90 77 -1 79 91 90 78 -1 65 88 86 67 -1 67 86 89 66 -1 64 87 88 65 -1 66 89 91 79 -1 50 95 97 71 -1 71 97 96 70 -1 49 94 92 51 -1 51 92 95 50 -1 48 93 94 49 -1 44 93 96 69 -1 109 98 99 108 -1 105 100 101 104 -1 107 102 103 106 -1 76 77 103 102 -1 77 90 106 103 -1 68 69 99 98 -1 91 76 102 107 -1 84 85 105 104 -1 96 97 109 108 -1 73 84 104 101 -1 69 96 108 99 -1 72 73 101 100 -1'>
                  <coordinate DEF='coords_ME_Cube_009' point='1 1 1 1 1 -1 1 -1 1 1 -1 -1 -1 1 1 -1 1 -1 -1 -1 1 -1 -1 -1 1 1 -0.87931 -1 -1 -0.87931 1 -1 -0.87931 -1 1 -0.87931 -1 -1 -0.804369 1 1 -0.804369 1 -1 -0.804369 -1 1 -0.804369 -1 -1 0.051845 1 1 0.051845 1 -1 0.051845 -1 1 0.051845 1 1 -0.034934 1 -1 -0.034934 -1 1 -0.034934 -1 -1 -0.034934 -1 -1 0.91906 1 1 0.91906 1 -1 0.91906 -1 1 0.91906 1 1 0.849683 1 -1 0.849683 -1 1 0.849683 -1 -1 0.849683 1 1 -0.841839 1 -1 -0.841839 -1 1 -0.841839 -1 -1 -0.841839 -1 -1 0.008455 1 1 0.008455 1 -1 0.008455 -1 1 0.008455 -1 -1 0.884371 1 1 0.884371 1 -1 0.884371 -1 1 0.884371 1 1 0.789445 1 -1 0.789445 -1 1 0.789445 -1 -1 0.789445 1 1 0.661571 1 -1 0.661571 -1 1 0.661571 -1 -1 0.661571 1 1 0.603187 1 -1 0.603187 -1 1 0.603187 -1 -1 0.603187 1 1 0.452134 1 -1 0.452134 -1 1 0.452134 -1 -1 0.452134 1 1 0.385051 1 -1 0.385051 -1 1 0.385051 -1 -1 0.385051 1 1 0.239058 1 -1 0.239058 -1 1 0.239058 -1 -1 0.239058 -1 3.22262 0.795566 1 3.22262 0.795566 1 4.3899 0.746674 -1 4.3899 0.746674 -1 3.22262 0.609309 1 3.22262 0.609309 1 4.3899 0.537238 -1 4.3899 0.537238 -1 3.22262 0.391172 1 3.22262 0.391172 1 4.3899 0.324161 -1 4.3899 0.324161 -1 -1 0.527661 1 1 0.527661 1 -1 0.527661 -1 1 0.527661 1 3.22262 0.533782 -1 3.22262 0.533782 -1 -1 0.312054 1 1 0.312055 1 -1 0.312055 -1 1 0.312055 1 3.22262 0.318176 -1 3.22262 0.318176 -1 -1 0.725508 1 1 0.725508 1 -1 0.725508 -1 1 0.725508 1 3.22262 0.731629 -1 3.22262 0.731629 -1 6.55655 0.804749 1 6.55655 0.804749 -1 6.55655 0.618491 1 6.55655 0.618491 -1 6.55655 0.400355 1 6.55655 0.400355 1 6.55655 0.542965 -1 6.55655 0.542965 1 6.55655 0.327358 -1 6.55655 0.327358 1 6.55655 0.740812 -1 6.55655 0.740812'></coordinate>
                  <textureCoordinate point='0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.6149 0.75 0.625 0.75 0.625 1 0.6149 1 0.6149 0 0.625 0 0.625 0.25 0.6149 0.25 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.6149 0.5 0.625 0.5 0.625 0.75 0.6149 0.75 0.6149 0.25 0.625 0.25 0.625 0.5 0.6149 0.5 0.375 0.25 0.3901 0.25 0.3901 0.5 0.375 0.5 0.375 0.5 0.3901 0.5 0.3901 0.75 0.375 0.75 0.375 0 0.3901 0 0.3901 0.25 0.375 0.25 0.375 0.75 0.3901 0.75 0.3901 1 0.375 1 0.3948 0.25 0.3995 0.25 0.3995 0.5 0.3948 0.5 0.3948 0.5 0.3995 0.5 0.3995 0.75 0.3948 0.75 0.3948 0 0.3995 0 0.3995 0.25 0.3948 0.25 0.3948 0.75 0.3995 0.75 0.3995 1 0.3948 1 0.5011 0.25 0.5065 0.25 0.5065 0.5 0.5011 0.5 0.5011 0.5 0.5065 0.5 0.5065 0.75 0.5011 0.75 0.5011 0 0.5065 0 0.5065 0.25 0.5011 0.25 0.5011 0.75 0.5065 0.75 0.5065 1 0.5011 1 0.3995 0.75 0.4956 0.75 0.4956 1 0.3995 1 0.3995 0 0.4956 0 0.4956 0.25 0.3995 0.25 0.3995 0.5 0.4956 0.5 0.4956 0.75 0.3995 0.75 0.3995 0.25 0.4956 0.25 0.4956 0.5 0.3995 0.5 0.6105 0.25 0.6149 0.25 0.6149 0.5 0.6105 0.5 0.6105 0.5 0.6149 0.5 0.6149 0.75 0.6105 0.75 0.6105 0 0.6149 0 0.6149 0.25 0.6105 0.25 0.6105 0.75 0.6149 0.75 0.6149 1 0.6105 1 0.5987 0.75 0.6062 0.75 0.6062 1 0.5987 1 0.5987 0 0.6062 0 0.6062 0.25 0.5987 0.25 0.5987 0.5 0.6062 0.5 0.6062 0.75 0.5987 0.75 0.5987 0.25 0.6062 0.25 0.6062 0.5 0.5987 0.5 0.3901 0.75 0.3948 0.75 0.3948 1 0.3901 1 0.3901 0 0.3948 0 0.3948 0.25 0.3901 0.25 0.3901 0.5 0.3948 0.5 0.3948 0.75 0.3901 0.75 0.3901 0.25 0.3948 0.25 0.3948 0.5 0.3901 0.5 0.4956 0.75 0.5011 0.75 0.5011 1 0.4956 1 0.4956 0 0.5011 0 0.5011 0.25 0.4956 0.25 0.4956 0.5 0.5011 0.5 0.5011 0.75 0.4956 0.75 0.4956 0.25 0.5011 0.25 0.5011 0.5 0.4956 0.5 0.6062 0.75 0.6105 0.75 0.6105 1 0.6062 1 0.6062 0 0.6105 0 0.6105 0.25 0.6062 0.25 0.6062 0.5 0.6105 0.5 0.6105 0.75 0.6062 0.75 0.6062 0.25 0.6105 0.25 0.6105 0.5 0.6062 0.5 0.5907 0.5 0.5827 0.5 0.5827 0.5 0.5907 0.5 0.5907 0.5 0.5987 0.5 0.5987 0.75 0.5907 0.75 0.5907 0 0.5987 0 0.5987 0.25 0.5907 0.25 0.5907 0.75 0.5987 0.75 0.5987 1 0.5907 1 0.5754 0.75 0.5827 0.75 0.5827 1 0.5754 1 0.5754 0 0.5827 0 0.5827 0.25 0.5754 0.25 0.5754 0.5 0.5827 0.5 0.5827 0.75 0.5754 0.75 0.5754 0.25 0.5827 0.25 0.5827 0.5 0.5754 0.5 0.566 0.25 0.5754 0.25 0.5754 0.25 0.566 0.25 0.566 0.5 0.5754 0.5 0.5754 0.75 0.566 0.75 0.566 0 0.5754 0 0.5754 0.25 0.566 0.25 0.566 0.75 0.5754 0.75 0.5754 1 0.566 1 0.5481 0.75 0.5565 0.75 0.5565 1 0.5481 1 0.5481 0 0.5565 0 0.5565 0.25 0.5481 0.25 0.5481 0.5 0.5565 0.5 0.5565 0.75 0.5481 0.75 0.5481 0.25 0.5565 0.25 0.5565 0.5 0.5481 0.5 0.539 0.25 0.5481 0.25 0.5481 0.25 0.539 0.25 0.539 0.5 0.5481 0.5 0.5481 0.75 0.539 0.75 0.539 0 0.5481 0 0.5481 0.25 0.539 0.25 0.539 0.75 0.5481 0.75 0.5481 1 0.539 1 0.5065 0.75 0.5299 0.75 0.5299 1 0.5065 1 0.5065 0 0.5299 0 0.5299 0.25 0.5065 0.25 0.5065 0.5 0.5299 0.5 0.5299 0.75 0.5065 0.75 0.5065 0.25 0.5299 0.25 0.5299 0.5 0.5065 0.5 0.539 0.5 0.539 0.25 0.539 0.25 0.539 0.5 0.5987 0.25 0.5987 0.5 0.5987 0.5 0.5987 0.25 0.5827 0.5 0.5827 0.25 0.5827 0.25 0.5827 0.5 0.5907 0.25 0.5987 0.25 0.5987 0.25 0.5907 0.25 0.5907 0.25 0.5987 0.25 0.5987 0.25 0.5907 0.25 0.566 0.5 0.5565 0.5 0.5565 0.5 0.566 0.5 0.5754 0.25 0.5754 0.5 0.5754 0.5 0.5754 0.25 0.5565 0.5 0.5565 0.25 0.5565 0.25 0.5565 0.5 0.566 0.25 0.5754 0.25 0.5754 0.25 0.566 0.25 0.539 0.5 0.5299 0.5 0.5299 0.5 0.539 0.5 0.5481 0.25 0.5481 0.5 0.5481 0.5 0.5481 0.25 0.5299 0.5 0.5299 0.25 0.5299 0.25 0.5299 0.5 0.5754 0.5 0.566 0.5 0.566 0.5 0.5754 0.5 0.5565 0.25 0.566 0.25 0.566 0.5 0.5565 0.5 0.5565 0.75 0.566 0.75 0.566 1 0.5565 1 0.5565 0 0.566 0 0.566 0.25 0.5565 0.25 0.5565 0.5 0.566 0.5 0.566 0.75 0.5565 0.75 0.5565 0.25 0.566 0.25 0.566 0.25 0.5565 0.25 0.5481 0.5 0.539 0.5 0.539 0.5 0.5481 0.5 0.5299 0.25 0.539 0.25 0.539 0.5 0.5299 0.5 0.5299 0.75 0.539 0.75 0.539 1 0.5299 1 0.5299 0 0.539 0 0.539 0.25 0.5299 0.25 0.5299 0.5 0.539 0.5 0.539 0.75 0.5299 0.75 0.5299 0.25 0.539 0.25 0.539 0.25 0.5299 0.25 0.5827 0.25 0.5907 0.25 0.5907 0.25 0.5827 0.25 0.5827 0.25 0.5907 0.25 0.5907 0.5 0.5827 0.5 0.5827 0.75 0.5907 0.75 0.5907 1 0.5827 1 0.5827 0 0.5907 0 0.5907 0.25 0.5827 0.25 0.5827 0.5 0.5907 0.5 0.5907 0.75 0.5827 0.75 0.5987 0.5 0.5907 0.5 0.5907 0.5 0.5987 0.5 0.5907 0.25 0.5987 0.25 0.5987 0.5 0.5907 0.5 0.566 0.25 0.5754 0.25 0.5754 0.5 0.566 0.5 0.539 0.25 0.5481 0.25 0.5481 0.5 0.539 0.5 0.5481 0.25 0.5481 0.5 0.5481 0.5 0.5481 0.25 0.5481 0.5 0.539 0.5 0.539 0.5 0.5481 0.5 0.5987 0.25 0.5987 0.5 0.5987 0.5 0.5987 0.25 0.539 0.25 0.5481 0.25 0.5481 0.25 0.539 0.25 0.566 0.5 0.566 0.25 0.566 0.25 0.566 0.5 0.5907 0.5 0.5907 0.25 0.5907 0.25 0.5907 0.5 0.5754 0.5 0.566 0.5 0.566 0.5 0.5754 0.5 0.5987 0.5 0.5907 0.5 0.5907 0.5 0.5987 0.5 0.5754 0.25 0.5754 0.5 0.5754 0.5 0.5754 0.25'></textureCoordinate>
                </indexedFaceSet>
              </shape>
            </group>
          </transform>
        </transform>
        <transform DEF='Cube_009_TRANSFORM' rotation='0 0.820542 0.571586 3.14159' scale='0.1 0.1 4' translation='1.45464 0 1.4842'>
          <transform DEF='Cube_009_ifs_TRANSFORM' translation='-2e-06 1e-06 0'>
            <group DEF='group_ME_Cube_010'>
              <shape>
                <appearance>
                  <material USE='MA_Material'></material>
                </appearance>
                <indexedFaceSet solid='false' texCoordIndex='0 1 2 3 -1 4 5 6 7 -1 8 9 10 11 -1 12 13 14 15 -1 16 17 18 19 -1 20 21 22 23 -1 24 25 26 27 -1 28 29 30 31 -1 32 33 34 35 -1 36 37 38 39 -1 40 41 42 43 -1 44 45 46 47 -1 48 49 50 51 -1 52 53 54 55 -1 56 57 58 59 -1 60 61 62 63 -1 64 65 66 67 -1 68 69 70 71 -1 72 73 74 75 -1 76 77 78 79 -1 80 81 82 83 -1 84 85 86 87 -1 88 89 90 91 -1 92 93 94 95 -1 96 97 98 99 -1 100 101 102 103 -1 104 105 106 107 -1 108 109 110 111 -1 112 113 114 115 -1 116 117 118 119 -1 120 121 122 123 -1 124 125 126 127 -1 128 129 130 131 -1 132 133 134 135 -1 136 137 138 139 -1 140 141 142 143 -1 144 145 146 147 -1 148 149 150 151 -1 152 153 154 155 -1 156 157 158 159 -1 160 161 162 163 -1 164 165 166 167 -1 168 169 170 171 -1 172 173 174 175 -1 176 177 178 179 -1 180 181 182 183 -1 184 185 186 187 -1 188 189 190 191 -1 192 193 194 195 -1 196 197 198 199 -1 200 201 202 203 -1 204 205 206 207 -1 208 209 210 211 -1 212 213 214 215 -1 216 217 218 219 -1 220 221 222 223 -1 224 225 226 227 -1 228 229 230 231 -1 232 233 234 235 -1 236 237 238 239 -1 240 241 242 243 -1 244 245 246 247 -1 248 249 250 251 -1 252 253 254 255 -1 256 257 258 259 -1 260 261 262 263 -1 264 265 266 267 -1 268 269 270 271 -1 272 273 274 275 -1 276 277 278 279 -1 280 281 282 283 -1 284 285 286 287 -1 288 289 290 291 -1 292 293 294 295 -1 296 297 298 299 -1 300 301 302 303 -1 304 305 306 307 -1 308 309 310 311 -1 312 313 314 315 -1 316 317 318 319 -1 320 321 322 323 -1 324 325 326 327 -1 328 329 330 331 -1 332 333 334 335 -1 336 337 338 339 -1 340 341 342 343 -1 344 345 346 347 -1 348 349 350 351 -1 352 353 354 355 -1 356 357 358 359 -1 360 361 362 363 -1 364 365 366 367 -1 368 369 370 371 -1 372 373 374 375 -1 376 377 378 379 -1 380 381 382 383 -1 384 385 386 387 -1 388 389 390 391 -1 392 393 394 395 -1 396 397 398 399 -1 400 401 402 403 -1 404 405 406 407 -1 408 409 410 411 -1 412 413 414 415 -1 416 417 418 419 -1 420 421 422 423 -1 424 425 426 427 -1 428 429 430 431 -1 432 433 434 435 -1 436 437 438 439 -1 440 441 442 443 -1 444 445 446 447 -1 448 449 450 451 -1 452 453 454 455 -1 456 457 458 459 -1 460 461 462 463 -1 464 465 466 467 -1 468 469 470 471 -1 472 473 474 475 -1 476 477 478 479 -1 480 481 482 483 -1 484 485 486 487 -1 488 489 490 491 -1 492 493 494 495 -1' coordIndex='0 4 6 2 -1 26 2 6 24 -1 24 6 4 27 -1 5 1 3 7 -1 25 0 2 26 -1 27 4 0 25 -1 5 11 8 1 -1 1 8 10 3 -1 7 9 11 5 -1 3 10 9 7 -1 34 15 13 32 -1 32 13 14 33 -1 35 12 15 34 -1 33 14 12 35 -1 39 19 17 37 -1 37 17 18 38 -1 36 16 19 39 -1 38 18 16 36 -1 14 21 23 12 -1 12 23 22 15 -1 13 20 21 14 -1 15 22 20 13 -1 43 27 25 41 -1 41 25 26 42 -1 40 24 27 43 -1 42 26 24 40 -1 57 29 31 59 -1 59 31 30 58 -1 56 28 29 57 -1 58 30 28 56 -1 10 33 122 123 -1 9 35 34 11 -1 32 33 46 44 -1 11 34 32 8 -1 21 38 36 23 -1 23 36 39 22 -1 21 20 49 51 -1 22 39 37 20 -1 29 42 40 31 -1 31 40 43 30 -1 42 29 55 54 -1 30 43 41 28 -1 45 44 46 47 -1 33 10 47 46 -1 8 32 44 45 -1 10 8 45 47 -1 49 48 50 51 -1 20 37 48 49 -1 37 38 50 48 -1 38 21 51 50 -1 53 52 54 55 -1 41 42 54 52 -1 29 28 53 55 -1 28 41 52 53 -1 95 58 80 97 -1 93 56 57 94 -1 92 59 58 95 -1 94 57 59 92 -1 65 61 63 67 -1 67 63 62 66 -1 64 60 61 65 -1 66 62 60 64 -1 101 66 84 103 -1 99 64 65 100 -1 98 67 66 101 -1 100 65 67 98 -1 73 69 71 75 -1 75 71 70 74 -1 72 68 69 73 -1 74 70 68 72 -1 105 76 90 108 -1 105 72 73 106 -1 104 75 74 107 -1 106 73 75 104 -1 18 77 79 16 -1 16 79 78 19 -1 17 76 77 18 -1 19 78 76 17 -1 96 97 117 116 -1 93 60 82 96 -1 58 56 81 80 -1 60 62 83 82 -1 103 84 112 119 -1 99 68 86 102 -1 66 64 85 84 -1 68 70 87 86 -1 80 81 111 110 -1 74 72 89 88 -1 76 78 91 90 -1 107 74 88 109 -1 56 93 96 81 -1 83 97 96 82 -1 61 94 92 63 -1 63 92 95 62 -1 60 93 94 61 -1 62 95 97 83 -1 64 99 102 85 -1 87 103 102 86 -1 69 100 98 71 -1 71 98 101 70 -1 68 99 100 69 -1 70 101 103 87 -1 78 107 109 91 -1 91 109 108 90 -1 77 106 104 79 -1 79 104 107 78 -1 76 105 106 77 -1 72 105 108 89 -1 117 110 111 116 -1 119 112 113 118 -1 121 114 115 120 -1 108 109 121 120 -1 81 96 116 111 -1 89 108 120 115 -1 84 85 113 112 -1 97 80 110 117 -1 109 88 114 121 -1 102 103 119 118 -1 88 89 115 114 -1 85 102 118 113 -1 123 122 125 124 -1 9 10 123 124 -1 35 9 124 125 -1 33 35 125 122 -1'>
                  <coordinate DEF='coords_ME_Cube_010' point='1 1 1 1 1 -1 1 -1 1 1 -1 -1 -1 1 1 -1 1 -1 -1 -1 1 -1 -1 -1 1 1 -0.87931 -1 -1 -0.87931 1 -1 -0.87931 -1 1 -0.87931 -1 -1 -0.804369 1 1 -0.804369 1 -1 -0.804369 -1 1 -0.804369 -1 -1 0.051845 1 1 0.051845 1 -1 0.051845 -1 1 0.051845 1 1 -0.034934 1 -1 -0.034934 -1 1 -0.034934 -1 -1 -0.034934 -1 -1 0.91906 1 1 0.91906 1 -1 0.91906 -1 1 0.91906 1 1 0.849683 1 -1 0.849683 -1 1 0.849683 -1 -1 0.849683 1 1 -0.841839 1 -1 -0.841839 -1 1 -0.841839 -1 -1 -0.841839 -1 -1 0.008455 1 1 0.008455 1 -1 0.008455 -1 1 0.008455 -1 -1 0.884371 1 1 0.884371 1 -1 0.884371 -1 1 0.884371 29.172 1 -0.841839 29.172 1 -0.87931 29.172 -1 -0.841839 29.172 -1 -0.87931 29.1834 1 0.008455 29.1834 1 -0.034934 29.1834 -1 0.008455 29.1834 -1 -0.034934 29.2983 1 0.884371 29.2983 1 0.849683 29.2983 -1 0.884371 29.2983 -1 0.849683 1 1 0.78963 1 -1 0.78963 -1 1 0.78963 -1 -1 0.78963 1 1 0.660947 1 -1 0.660947 -1 1 0.660947 -1 -1 0.660947 1 1 0.605184 1 -1 0.605184 -1 1 0.605184 -1 -1 0.605184 1 1 0.456208 1 -1 0.456208 -1 1 0.456208 -1 -1 0.456208 1 1 0.38738 1 -1 0.38738 -1 1 0.38738 -1 -1 0.38738 1 1 0.241121 1 -1 0.241121 -1 1 0.241121 -1 -1 0.241121 -1 3.22262 0.795752 1 3.22262 0.795752 1 4.3899 0.74605 -1 4.3899 0.74605 -1 3.22262 0.611305 1 3.22262 0.611305 1 4.3899 0.541311 -1 4.3899 0.541311 -1 3.22262 0.393502 1 3.22262 0.393502 1 4.3899 0.326224 -1 4.3899 0.326224 -1 -1 0.725289 1 1 0.725289 1 -1 0.725289 -1 1 0.725289 1 3.22262 0.73141 -1 3.22262 0.73141 -1 -1 0.530696 1 1 0.530696 1 -1 0.530696 -1 1 0.530696 1 3.22262 0.536817 -1 3.22262 0.536817 -1 -1 0.314251 1 1 0.314251 1 -1 0.314251 -1 1 0.314251 1 3.22262 0.320372 -1 3.22262 0.320372 -1 6.55655 0.804934 1 6.55655 0.804934 -1 6.55655 0.620488 1 6.55655 0.620488 -1 6.55655 0.402684 1 6.55655 0.402684 1 6.55655 0.740592 -1 6.55655 0.740592 1 6.55655 0.546 -1 6.55655 0.546 1 6.55655 0.329554 -1 6.55655 0.329554 1 -1 -0.841839 1 -1 -0.87931 -1 -1 -0.87931 -1 -1 -0.841839'></coordinate>
                  <textureCoordinate point='0.625 0.5 0.875 0.5 0.875 0.75 0.625 0.75 0.6149 0.75 0.625 0.75 0.625 1 0.6149 1 0.6149 0 0.625 0 0.625 0.25 0.6149 0.25 0.125 0.5 0.375 0.5 0.375 0.75 0.125 0.75 0.6149 0.5 0.625 0.5 0.625 0.75 0.6149 0.75 0.6149 0.25 0.625 0.25 0.625 0.5 0.6149 0.5 0.375 0.25 0.3901 0.25 0.3901 0.5 0.375 0.5 0.375 0.5 0.3901 0.5 0.3901 0.75 0.375 0.75 0.375 0 0.3901 0 0.3901 0.25 0.375 0.25 0.375 0.75 0.3901 0.75 0.3901 1 0.375 1 0.3948 0.25 0.3995 0.25 0.3995 0.5 0.3948 0.5 0.3948 0.5 0.3995 0.5 0.3995 0.75 0.3948 0.75 0.3948 0 0.3995 0 0.3995 0.25 0.3948 0.25 0.3948 0.75 0.3995 0.75 0.3995 1 0.3948 1 0.5011 0.25 0.5065 0.25 0.5065 0.5 0.5011 0.5 0.5011 0.5 0.5065 0.5 0.5065 0.75 0.5011 0.75 0.5011 0 0.5065 0 0.5065 0.25 0.5011 0.25 0.5011 0.75 0.5065 0.75 0.5065 1 0.5011 1 0.3995 0.75 0.4956 0.75 0.4956 1 0.3995 1 0.3995 0 0.4956 0 0.4956 0.25 0.3995 0.25 0.3995 0.5 0.4956 0.5 0.4956 0.75 0.3995 0.75 0.3995 0.25 0.4956 0.25 0.4956 0.5 0.3995 0.5 0.6105 0.25 0.6149 0.25 0.6149 0.5 0.6105 0.5 0.6105 0.5 0.6149 0.5 0.6149 0.75 0.6105 0.75 0.6105 0 0.6149 0 0.6149 0.25 0.6105 0.25 0.6105 0.75 0.6149 0.75 0.6149 1 0.6105 1 0.5987 0.75 0.6062 0.75 0.6062 1 0.5987 1 0.5987 0 0.6062 0 0.6062 0.25 0.5987 0.25 0.5987 0.5 0.6062 0.5 0.6062 0.75 0.5987 0.75 0.5987 0.25 0.6062 0.25 0.6062 0.5 0.5987 0.5 0.3901 0.75 0.3948 0.75 0.3948 0.75 0.3901 0.75 0.3901 0 0.3948 0 0.3948 0.25 0.3901 0.25 0.3948 0.5 0.3948 0.75 0.3948 0.75 0.3948 0.5 0.3901 0.25 0.3948 0.25 0.3948 0.5 0.3901 0.5 0.4956 0.75 0.5011 0.75 0.5011 1 0.4956 1 0.4956 0 0.5011 0 0.5011 0.25 0.4956 0.25 0.4956 0.75 0.4956 0.5 0.4956 0.5 0.4956 0.75 0.4956 0.25 0.5011 0.25 0.5011 0.5 0.4956 0.5 0.6062 0.75 0.6105 0.75 0.6105 1 0.6062 1 0.6062 0 0.6105 0 0.6105 0.25 0.6062 0.25 0.6105 0.75 0.6062 0.75 0.6062 0.75 0.6105 0.75 0.6062 0.25 0.6105 0.25 0.6105 0.5 0.6062 0.5 0.3901 0.5 0.3948 0.5 0.3948 0.75 0.3901 0.75 0.3948 0.75 0.3901 0.75 0.3901 0.75 0.3948 0.75 0.3901 0.5 0.3948 0.5 0.3948 0.5 0.3901 0.5 0.3901 0.75 0.3901 0.5 0.3901 0.5 0.3901 0.75 0.4956 0.5 0.5011 0.5 0.5011 0.75 0.4956 0.75 0.4956 0.5 0.5011 0.5 0.5011 0.5 0.4956 0.5 0.5011 0.5 0.5011 0.75 0.5011 0.75 0.5011 0.5 0.5011 0.75 0.4956 0.75 0.4956 0.75 0.5011 0.75 0.6062 0.5 0.6105 0.5 0.6105 0.75 0.6062 0.75 0.6105 0.5 0.6105 0.75 0.6105 0.75 0.6105 0.5 0.6062 0.75 0.6062 0.5 0.6062 0.5 0.6062 0.75 0.6062 0.5 0.6105 0.5 0.6105 0.5 0.6062 0.5 0.5907 0.25 0.5987 0.25 0.5987 0.25 0.5907 0.25 0.5907 0.5 0.5987 0.5 0.5987 0.75 0.5907 0.75 0.5907 0 0.5987 0 0.5987 0.25 0.5907 0.25 0.5907 0.75 0.5987 0.75 0.5987 1 0.5907 1 0.5756 0.75 0.5826 0.75 0.5826 1 0.5756 1 0.5756 0 0.5826 0 0.5826 0.25 0.5756 0.25 0.5756 0.5 0.5826 0.5 0.5826 0.75 0.5756 0.75 0.5756 0.25 0.5826 0.25 0.5826 0.5 0.5756 0.5 0.5663 0.25 0.5756 0.25 0.5756 0.25 0.5663 0.25 0.5663 0.5 0.5756 0.5 0.5756 0.75 0.5663 0.75 0.5663 0 0.5756 0 0.5756 0.25 0.5663 0.25 0.5663 0.75 0.5756 0.75 0.5756 1 0.5663 1 0.5484 0.75 0.557 0.75 0.557 1 0.5484 1 0.5484 0 0.557 0 0.557 0.25 0.5484 0.25 0.5484 0.5 0.557 0.5 0.557 0.75 0.5484 0.75 0.5484 0.25 0.557 0.25 0.557 0.5 0.5484 0.5 0.5393 0.5 0.5301 0.5 0.5301 0.5 0.5393 0.5 0.5393 0.5 0.5484 0.5 0.5484 0.75 0.5393 0.75 0.5393 0 0.5484 0 0.5484 0.25 0.5393 0.25 0.5393 0.75 0.5484 0.75 0.5484 1 0.5393 1 0.5065 0.75 0.5301 0.75 0.5301 1 0.5065 1 0.5065 0 0.5301 0 0.5301 0.25 0.5065 0.25 0.5065 0.5 0.5301 0.5 0.5301 0.75 0.5065 0.75 0.5065 0.25 0.5301 0.25 0.5301 0.5 0.5065 0.5 0.5907 0.5 0.5907 0.25 0.5907 0.25 0.5907 0.5 0.5907 0.5 0.5826 0.5 0.5826 0.5 0.5907 0.5 0.5987 0.25 0.5987 0.5 0.5987 0.5 0.5987 0.25 0.5826 0.5 0.5826 0.25 0.5826 0.25 0.5826 0.5 0.5663 0.25 0.5756 0.25 0.5756 0.25 0.5663 0.25 0.5663 0.5 0.557 0.5 0.557 0.5 0.5663 0.5 0.5756 0.25 0.5756 0.5 0.5756 0.5 0.5756 0.25 0.557 0.5 0.557 0.25 0.557 0.25 0.557 0.5 0.5987 0.25 0.5987 0.5 0.5987 0.5 0.5987 0.25 0.5484 0.25 0.5484 0.5 0.5484 0.5 0.5484 0.25 0.5301 0.5 0.5301 0.25 0.5301 0.25 0.5301 0.5 0.5393 0.25 0.5484 0.25 0.5484 0.25 0.5393 0.25 0.5987 0.5 0.5907 0.5 0.5907 0.5 0.5987 0.5 0.5826 0.25 0.5907 0.25 0.5907 0.5 0.5826 0.5 0.5826 0.75 0.5907 0.75 0.5907 1 0.5826 1 0.5826 0 0.5907 0 0.5907 0.25 0.5826 0.25 0.5826 0.5 0.5907 0.5 0.5907 0.75 0.5826 0.75 0.5826 0.25 0.5907 0.25 0.5907 0.25 0.5826 0.25 0.5756 0.5 0.5663 0.5 0.5663 0.5 0.5756 0.5 0.557 0.25 0.5663 0.25 0.5663 0.5 0.557 0.5 0.557 0.75 0.5663 0.75 0.5663 1 0.557 1 0.557 0 0.5663 0 0.5663 0.25 0.557 0.25 0.557 0.5 0.5663 0.5 0.5663 0.75 0.557 0.75 0.557 0.25 0.5663 0.25 0.5663 0.25 0.557 0.25 0.5301 0.25 0.5393 0.25 0.5393 0.25 0.5301 0.25 0.5301 0.25 0.5393 0.25 0.5393 0.5 0.5301 0.5 0.5301 0.75 0.5393 0.75 0.5393 1 0.5301 1 0.5301 0 0.5393 0 0.5393 0.25 0.5301 0.25 0.5301 0.5 0.5393 0.5 0.5393 0.75 0.5301 0.75 0.5484 0.5 0.5393 0.5 0.5393 0.5 0.5484 0.5 0.5907 0.25 0.5987 0.25 0.5987 0.5 0.5907 0.5 0.5663 0.25 0.5756 0.25 0.5756 0.5 0.5663 0.5 0.5393 0.25 0.5484 0.25 0.5484 0.5 0.5393 0.5 0.5393 0.5 0.5393 0.25 0.5393 0.25 0.5393 0.5 0.5987 0.5 0.5907 0.5 0.5907 0.5 0.5987 0.5 0.5484 0.5 0.5393 0.5 0.5393 0.5 0.5484 0.5 0.5756 0.25 0.5756 0.5 0.5756 0.5 0.5756 0.25 0.5907 0.25 0.5987 0.25 0.5987 0.25 0.5907 0.25 0.5393 0.25 0.5484 0.25 0.5484 0.25 0.5393 0.25 0.5663 0.5 0.5663 0.25 0.5663 0.25 0.5663 0.5 0.5484 0.25 0.5484 0.5 0.5484 0.5 0.5484 0.25 0.5756 0.5 0.5663 0.5 0.5663 0.5 0.5756 0.5 0.3901 0.75 0.3948 0.75 0.3948 1 0.3901 1 0.3901 1 0.3901 0.75 0.3901 0.75 0.3901 1 0.3948 0 0.3901 0 0.3901 0 0.3948 0 0.3948 0.75 0.3948 1 0.3948 1 0.3948 0.75'></textureCoordinate>
                </indexedFaceSet>
              </shape>
            </group>
          </transform>
        </transform>
    </transform>
    <!--Battery Cart-->
    <transform translation="6 -1.4 11.8">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="3.7 1.8 0.25"></box>
     </shape>
    </transform>
    <transform translation="6 -1.6 11.6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="3.7 1.4 0.3"></box>
     </shape>
    </transform>
    <transform DEF="cart">
    <transform translation="6 -0.9 11.6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.05 0.2 0.3"></box>
     </shape>
    </transform>
    <transform translation="5.4 -0.9 11.6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.05 0.2 0.3"></box>
     </shape>
    </transform>
    <transform translation="4.8 -0.9 11.6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.05 0.2 0.3"></box>
     </shape>
    </transform>
    <transform translation="4.2 -0.9 11.6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.05 0.2 0.3"></box>
     </shape>
    </transform>
    </transform>
    <Transform translation='1.8 0 0'>
     <Shape USE='cart'/>
    </Transform>
    <!--LEDS-->
    <transform translation="4.5 -0.5 11.8">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <sphere height="0.03" radius="0.03"></sphere>
     </shape>
    </transform>
    <transform translation="5.1 -0.5 11.8">
     <shape>
      <appearance>
       <material diffuseColor="0 0 1"></material>
      </appearance>
      <sphere height="0.03" radius="0.03"></sphere>
     </shape>
    </transform>
    <transform translation="5.7 -0.5 11.8">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <sphere height="0.03" radius="0.03"></sphere>
     </shape>
    </transform>
     <transform translation="6.3 -0.5 11.8">
     <shape>
      <appearance>
       <material diffuseColor="0 0 1"></material>
      </appearance>
      <sphere height="0.03" radius="0.03"></sphere>
     </shape>
    </transform>
    <transform translation="6.9 -0.5 11.8">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <sphere height="0.03" radius="0.03"></sphere>
     </shape>
    </transform>
    <transform translation="7.5 -0.5 11.8">
     <shape>
      <appearance>
       <material diffuseColor="0 0 1"></material>
      </appearance>
      <sphere height="0.03" radius="0.03"></sphere>
     </shape>
    </transform>
    <!--Battery Cart-->
    <transform translation="3 -1.4 11.8">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.05 2.5 0.05"></box>
     </shape>
    </transform>
    <transform translation="3.6 -1.4 11.8">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.05 2.5 0.05"></box>
     </shape>
    </transform>
    <transform translation="3 -1.4 11.4">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.05 2.5 0.05"></box>
     </shape>
    </transform>
    <transform translation="3.6 -1.4 11.4">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.05 2.5 0.05"></box>
     </shape>
    </transform>
    <transform translation="3.3 -0.15 11.6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.7 0.05 0.6"></box>
     </shape>
    </transform>
    <transform translation="3.3 -0.45 11.6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.7 0.05 0.6"></box>
     </shape>
    </transform>
    <transform translation="3.3 -0.75 11.6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.7 0.05 0.6"></box>
     </shape>
    </transform>
    <transform translation="3.3 -1.05 11.6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.7 0.05 0.6"></box>
     </shape>
    </transform>
     <transform translation="3.3 -1.35 11.6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.7 0.05 0.6"></box>
     </shape>
    </transform>
    <!--LAUNCHER-->
    <transform translation="0 -0.85 -4.5" rotation="1 0 0 -1.3">
     <shape>
      <appearance>
       <material diffuseColor="0.85 0.85 0.85"></material>
      </appearance>
      <box size="0.4 10 0.15"></box>
     </shape>
    </transform>
    <group DEF="S">
    <transform translation="-0.2 -0.89 -4.51" rotation="1 0 0 -1.3">
     <shape>
      <appearance>
       <material diffuseColor="0.85 0.85 0.85"></material>
      </appearance>
      <box size="0.15 10 0.05"></box>
     </shape>
    </transform>
    <transform translation="-0.2 -0.75 -4.48" rotation="1 0 0 -1.3">
     <shape>
      <appearance>
       <material diffuseColor="0.85 0.85 0.85"></material>
      </appearance>
      <box size="0.15 10 0.05"></box>
     </shape>
    </transform>
  </group>
  <transform translation="0.4 0 0">
     <shape USE="S">
  </transform>
  <!--EDDY BREAK-->
  <transform translation="0 0.4 -8.8" rotation="1 0 0 -1.3">
     <shape>
      <appearance>
       <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <box size="0.05 1 0.2"></box>
     </shape>
  </transform>
  <!--Launch Operator Box-->
  <transform translation="0 -0.7 0.2">
     <shape>
      <appearance>
       <material diffuseColor="0.85 0.85 0.85"></material>
      </appearance>
      <box size="0.08 2.8 0.08"></box>
     </shape>
    </transform>
    <transform translation="0 -1 0.2">
     <shape>
      <appearance>
       <material diffuseColor="0.85 0.85 0.85"></material>
      </appearance>
      <box size="1 0.08 0.08"></box>
     </shape>
    </transform>
    <transform translation="0 0.4 0.2">
     <shape>
      <appearance>
       <material diffuseColor="0.85 0.85 0.85"></material>
      </appearance>
      <box size="1 0.08 0.08"></box>
     </shape>
    </transform>
    <transform translation="0 -0.3 0.2">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1" transparency="0.7"></material>
      </appearance>
      <box size="1 1.4 0.01"></box>
     </shape>
    </transform>
    <!--BOX-->
    <transform translation="0 -0.2 0.29">
     <shape>
      <appearance>
       <material diffuseColor="0.8 0.8 0.8"></material>
      </appearance>
      <box size="0.16 0.4 0.1"></box>
     </shape>
    </transform>
    <!--BLUE-->
    <transform translation="0 -0.35 0.33" rotation="1 0 0 1.577">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <cylinder height="0.05" radius="0.03"></cylinder>
     </shape>
    </transform>
    <group>
    <transform translation="0 -0.35 0.34" rotation="1 0 0 1.577">
     <shape onclick="enable();">
      <appearance>
       <material diffuseColor="0 0 1"></mate
        rial>
      </appearance>
      <cylinder height="0.05" radius="0.028"></cylinder>
     </shape>
    </transform>
    <touchSensor id='spin' enabled="false"/>
    <Sound>
    <AudioClip id="ssound" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/6/6f/Doublesele.wav"/>
    </Sound>
    <Sound>
    <AudioClip id="propsound" loop="true" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/3/38/Propeller-plane-flying-steady-01.wav"/>
    </Sound>
    </group>
    <!--GREEN-->
    <transform translation="0 -0.05 0.33" rotation="1 0 0 1.577">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <cylinder height="0.05" radius="0.03"></cylinder>
     </shape>
    </transform>
    <group>
    <transform translation="0 -0.05 0.34" rotation="1 0 0 1.577">
     <shape onclick="launch();">
      <appearance>
       <material diffuseColor="0 1 0"></material>
      </appearance>
      <cylinder height="0.05" radius="0.028"></cylinder>
     </shape>
    </transform>
    <touchSensor id="launch" enabled="false"/>
    <Sound>
    <AudioClip id="lsound" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/6/6f/Doublesele.wav"/>
    </Sound>
    </group>
    <!--YELLOW-->
    <transform translation="0 -0.15 0.33" rotation="1 0 0 1.577">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <cylinder height="0.05" radius="0.03"></cylinder>
     </shape>
    </transform>
    <transform translation="0 -0.15 0.34" rotation="1 0 0 1.577">
     <shape>
      <appearance>
       <material diffuseColor="1 1 0"></material>
      </appearance>
      <cylinder height="0.05" radius="0.028"></cylinder>
     </shape>
    </transform>
    <!--WHITE-->
    <transform translation="0 -0.25 0.33" rotation="1 0 0 1.577">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <cylinder height="0.05" radius="0.03"></cylinder>
     </shape>
    </transform>
    <transform translation="0 -0.25 0.34" rotation="1 0 0 1.577">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height="0.05" radius="0.028"></cylinder>
     </shape>
    </transform>
    <!--E STOP-->
    <transform translation="0 0.015 0.28">
     <shape>
      <appearance>
       <material diffuseColor="1 1 0"></material>
      </appearance>
      <cylinder height="0.05" radius="0.028"></cylinder>
     </shape>
    </transform>
    <group>
    <transform translation="0 0.03 0.28">
     <shape onclick="estop();">
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <cylinder height="0.03" radius="0.03"></cylinder>
     </shape>
    </transform>
    <touchSensor id="e-stop" enabled="false">
    <Sound>
    <AudioClip id="esound" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/6/6f/Doublesele.wav"/>
    </Sound>
    <Sound>
    <AudioClip id="siren" loop="true" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/1/1e/Siren.wav"/>
    </Sound>
    </group>
    <!--MAGIC WAND CONTAINER-->
    <transform translation="-0.5 -0.88 0.305">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1" transparency="0.7"></material>
      </appearance>
      <box size="0.01 0.15 0.2"></box>
     </shape>
    </transform>
    <transform translation="0 -0.88 0.305">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1" transparency="0.7"></material>
      </appearance>
      <box size="0.01 0.15 0.2"></box>
     </shape>
    </transform>
    <transform translation="0.5 -0.88 0.305">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1" transparency="0.7"></material>
      </appearance>
      <box size="0.01 0.15 0.2"></box>
     </shape>
    </transform>
    <transform translation="0 -0.88 0.4">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1" transparency="0.7"></material>
      </appearance>
      <box size="1 0.15 0.01"></box>
     </shape>
    </transform>
    <transform translation="0 -0.95 0.3">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1" transparency="0.7"></material>
      </appearance>
      <box size="1.01 0.01 0.18"></box>
     </shape>
    </transform>
    <!--SIGNAL LIGHT-->
    <transform translation="0 0.7 0.2">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <cylinder height="0.1" radius="0.08"></cylinder>
     </shape>
    </transform>
    <transform translation="0 0.8 0.2">
     <shape>
      <appearance>
       <material id="red" diffuseColor="0.01 0 0" ambientIntensity='0.0933' shininess='0.9' specularColor='0.46 0.46 0.46'></material>
      </appearance>
      <cylinder height="0.1" radius="0.08"></cylinder>
     </shape>
    </transform>
     
    <!--LAUNCHER SUPPORT-->
    <transform translation="0 -0.8 -6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.4 0.6 0.08"></box>
     </shape>
    </transform>
    <transform translation="0.2 -1 -6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.08 0.6 0.08"></box>
     </shape>
    </transform>
    <transform translation="-0.2 -1 -6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.08 0.6 0.08"></box>
     </shape>
    </transform>
    <transform translation="0 -1.3 -6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="2 0.08 0.08"></box>
     </shape>
    </transform>
    <transform translation="-1 -1.8 -6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.08 1.08 0.08"></box>
     </shape>
    </transform>
    <transform translation="1 -1.8 -6">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.08 1.08 0.08"></box>
     </shape>
    </transform>
    <transform translation="-0.48 -1.9 -5.4" rotation="0 1 0 0.7">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.08 0.08 1.6"></box>
     </shape>
    </transform>
    <transform translation="0.48 -1.9 -5.4" rotation="0 1 0 -0.7">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.08 0.08 1.6"></box>
     </shape>
    </transform>
    <transform translation="0 -1.46 -5.4" rotation="1 0 0 -0.9">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <box size="0.08 1.5 0.08"></box>
     </shape>
    </transform>
    <!--HARD STOP-->
    <transform translation="0 -1.7 -1">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <box size="0.1 0.05 0.1"></box>
     </shape>
    </transform>
    <!--POWER CABINET-->
    <transform translation="-0.6 -1.6 -5.8">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.6 0.7 0.2"></box>
     </shape>
    </transform>
    <transform translation="-0.6 -1.6 -5.7">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <box size="0.3 0.4 0.1"></box>
     </shape>
    </transform>
    <!--CONTROL CABINET-->
    <transform translation="0.6 -1.6 -5.8">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <box size="0.6 0.7 0.2"></box>
     </shape>
    </transform>
    <transform translation="0.6 -1.6 -5.7">
     <shape>
      <appearance>
       <material diffuseColor="0 1 0"></material>
      </appearance>
      <box size="0.3 0.4 0.1"></box>
     </shape>
    </transform>
    <!--MOTOR-->
    <transform translation="0.25 -1.0 -4.7" rotation="0 0 1 1.57">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <cylinder height="0.3" radius="0.1"></cylinder>
     </shape>
    </transform>
    <transform translation="0 -1.0 -4.7" rotation="0 0 1 1.57">
     <shape>
      <appearance>
       <material diffuseColor="0.7 0.7 0.7"></material>
      </appearance>
      <cylinder height="0.2" radius="0.16"></cylinder>
     </shape>
    </transform>
    <!--CARRIAGE-->
    <transform DEF="CARRIAGE"  translation="0 -1.15 0.78" rotation="1 0 0 0.3">
    <transform translation="0 -1.0 -1.9">
     <shape>
      <appearance>
       <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <box size="0.6 0.02 1"></box>
     </shape>
    </transform>
    <transform translation="0.29 -1.04 -1.9">
     <shape>
      <appearance>
       <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <box size="0.02 0.1 1"></box>
     </shape>
    </transform>
    <transform translation="-0.29 -1.04 -1.9">
     <shape>
      <appearance>
       <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <box size="0.02 0.1 1"></box>
     </shape>
    </transform>
    <transform translation="0 -1.04 -1.85">
     <shape>
      <appearance>
       <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <box size="0.02 0.1 0.7"></box>
     </shape>
    </transform>
    <transform translation="0 -0.95 -0.94" rotation="1 0 0 -0.1">
     <shape>
      <appearance>
       <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <box size="0.15 0.02 1"></box>
     </shape>
    </transform>
    <transform translation="0 0 0" rotation="0 1 0 0.38">
    <transform translation="0.32 -0.97 -1.1" rotation="1 0 0 -0.09">
     <shape>
      <appearance>
       <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <box size="0.15 0.02 0.64"></box>
     </shape>
    </transform>
    </transform>
    <transform translation="0 0 0" rotation="0 1 0 -0.38">
    <transform translation="-0.32 -0.97 -1.1" rotation="1 0 0 -0.09">
     <shape>
      <appearance>
       <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <box size="0.15 0.02 0.64"></box>
     </shape>
    </transform>
    </transform>
    <transform translation="0.068 -0.9 -0.66" rotation="1 0 0 -0.09">
     <shape>
      <appearance>
       <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <box size="0.02 0.05 0.43"></box>
     </shape>
    </transform>
    <transform translation="-0.068 -0.9 -0.66" rotation="1 0 0 -0.09">
     <shape>
      <appearance>
       <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <box size="0.02 0.05 0.43"></box>
     </shape>
    </transform>
    <transform translation="0 -0.88 -0.44" rotation="1 0 0 -0.09">
     <shape>
      <appearance>
       <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <box size="0.16 0.05 0.02"></box>
     </shape>
    </transform>
    <transform translation="0 0 0" rotation="0 1 0 -0.38">
    <transform translation="-0.25 -0.942 -1.1" rotation="1 0 0 -0.09">
     <shape>
      <appearance>
       <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <box size="0.02 0.05 0.64"></box>
     </shape>
    </transform>
    </transform>
    <transform translation="0 0 0" rotation="0 1 0 0.38">
    <transform translation="0.25 -0.942 -1.1" rotation="1 0 0 -0.09">
     <shape>
      <appearance>
       <material diffuseColor="0.01 0.01 0.01"></material>
      </appearance>
      <box size="0.02 0.05 0.64"></box>
     </shape>
    </transform>
    </transform>
    </transform>
    <timeSensor id="tp" cycleInterval="2" loop="false" enabled="false"/>
    <timeSensor id="to1" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tc1" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="to2" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tc2" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="to3" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tc3" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="to4" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tc4" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tZ11" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tZ12" cycleInterval="5" loop="false" enabled="true"/>
    <timeSensor id="tZ13" cycleInterval="5" loop="false" enabled="true"/>
    <timeSensor id="tZ21" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tZ22" cycleInterval="5" loop="false" enabled="true"/>
    <timeSensor id="tZ23" cycleInterval="5" loop="false" enabled="true"/>
    <timeSensor id="tZ31" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tZ32" cycleInterval="5" loop="false" enabled="true"/>
    <timeSensor id="tZ33" cycleInterval="5" loop="false" enabled="true"/>
    <timeSensor id="tZ41" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tZ42" cycleInterval="5" loop="false" enabled="true"/>
    <timeSensor id="tZ43" cycleInterval="5" loop="false" enabled="true"/>
    <timeSensor id="tW1" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tpod1" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tpod2" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tpod3" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tpod4" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor DEF="tW2" cycleInterval="4" loop="false"/>
    <timeSensor id="tWW1" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor DEF="tWW2" cycleInterval="4" loop="false"/>
    <timeSensor id="tWWW1" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor DEF="tWWW2" cycleInterval="4" loop="false"/>
    <timeSensor id="tWWWW1" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor DEF="tWWWW2" cycleInterval="4" loop="false"/>
    <timeSensor id="tB1" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor DEF="tB2" cycleInterval="5" loop="false"/>
    <timeSensor id="tBB1" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor DEF="tBB2" cycleInterval="5" loop="false"/>
    <timeSensor id="tBBB1" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor DEF="tBBB2" cycleInterval="5" loop="false"/>
    <timeSensor id="tN1" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor DEF="tN2" cycleInterval="5" loop="false"/>
    <timeSensor id="tNN1" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor DEF="tNN2" cycleInterval="5" loop="false"/>
    <timeSensor id="tNNN1" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor DEF="tNNN2" cycleInterval="5" loop="false"/>
    <timeSensor id="tNNNN1" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor DEF="tNNNN2" cycleInterval="5" loop="false"/>
    <timeSensor id="tp1" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp2" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp3" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp4" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor DEF="t12" cycleInterval="10" loop="false"/>
    <timeSensor DEF="t13" cycleInterval="10" loop="false"/>
    <timeSensor id="tr" cycleInterval="0.5" loop="true" enabled="false"/>


    <PositionInterpolator DEF="MP" key="0 0.5 1"  keyValue="-7.2 0.25 7  -7.2 0.25 15   -0.28 -0.5 100.5"/>
    <OrientationInterpolator id="d1" key="0 1" keyValue="0 0 1 0  0 0 1 -1.57079"/>
    <OrientationInterpolator id="d2" key="0 1" keyValue="0 0 1 0  0 0 1 1.57079"/>
    <OrientationInterpolator id="dd1" key="0 1" keyValue="0 0 1 -1.57079  0 0 1 0"/>
    <OrientationInterpolator id="dd2" key="0 1" keyValue="0 0 1 1.57079  0 0 1 0"/>
    
    <OrientationInterpolator id="d3" key="0 1" keyValue="0 0 1 0  0 0 1 -1.57079"/>
    <OrientationInterpolator id="d4" key="0 1" keyValue="0 0 1 0  0 0 1 1.57079"/>
    <OrientationInterpolator id="dd3" key="0 1" keyValue="0 0 1 -1.57079  0 0 1 0"/>
    <OrientationInterpolator id="dd4" key="0 1" keyValue="0 0 1 1.57079  0 0 1 0"/>
    
    <OrientationInterpolator id="d5" key="0 1" keyValue="0 0 1 0  0 0 1 -1.57079"/>
    <OrientationInterpolator id="d6" key="0 1" keyValue="0 0 1 0  0 0 1 1.57079"/>
    <OrientationInterpolator id="dd5" key="0 1" keyValue="0 0 1 -1.57079  0 0 1 0"/>
    <OrientationInterpolator id="dd6" key="0 1" keyValue="0 0 1 1.57079  0 0 1 0"/>
    
    <OrientationInterpolator id="d7" key="0 1" keyValue="0 0 1 0  0 0 1 -1.57079"/>
    <OrientationInterpolator id="d8" key="0 1" keyValue="0 0 1 0  0 0 1 1.57079"/>
    <OrientationInterpolator id="dd7" key="0 1" keyValue="0 0 1 -1.57079  0 0 1 0"/>
    <OrientationInterpolator id="dd8" key="0 1" keyValue="0 0 1 1.57079  0 0 1 0"/>
    <PositionInterpolator DEF="Z1" key="0 1"  keyValue="0 0 0  0.3 0.2 -10.85"/>
    <OrientationInterpolator DEF="Z2" key="0 1"  keyValue="0 1 0 0  0 1 0 -3.14159"/>
    <OrientationInterpolator DEF="Z3" key="0 1"  keyValue="1 0 0 0  1 0 0 2.13"/>
    <PositionInterpolator DEF="ZZ1" key="0 1"  keyValue="0.8 0 0  0.3 0.2 -10.85"/>
    <OrientationInterpolator DEF="ZZ2" key="0 1"  keyValue="0 1 0 0  0 1 0 -3.14159"/>
    <OrientationInterpolator DEF="ZZ3" key="0 1"  keyValue="1 0 0 0  1 0 0 2.13"/>
    <PositionInterpolator DEF="ZZZ1" key="0 1"  keyValue="1.6 0 0  0.3 0.2 -10.85"/>
    <OrientationInterpolator DEF="ZZZ2" key="0 1"  keyValue="0 1 0 0  0 1 0 -3.14159"/>
    <OrientationInterpolator DEF="ZZZ3" key="0 1"  keyValue="1 0 0 0  1 0 0 2.13"/>
    <PositionInterpolator DEF="ZZZZ1" key="0 1"  keyValue="2.4 0 0  0.3 0.2 -10.85"/>
    <OrientationInterpolator DEF="ZZZZ2" key="0 1"  keyValue="0 1 0 0  0 1 0 -3.14159"/>
    <OrientationInterpolator DEF="ZZZZ3" key="0 1"  keyValue="1 0 0 0  1 0 0 2.13"/>
    <PositionInterpolator DEF="W1" key="0 1"  keyValue="7.65 0.84 8  0 -1.237 -1.55"/>
    <OrientationInterpolator DEF="W2" key="0 1"  keyValue="0 1 0 3.142  0 1 0 1.5709"/>
    <PositionInterpolator DEF="WW1" key="0 1"  keyValue="7.5 0.47 8  0 -1.237 -1.55"/>
    <OrientationInterpolator DEF="WW2" key="0 1"  keyValue="0 1 0 3.142  0 1 0 1.5709"/>
    <PositionInterpolator DEF="WWW1" key="0 1"  keyValue="7.35 0.08 8  0 -1.237 -1.55"/>
    <OrientationInterpolator DEF="WWW2" key="0 1"  keyValue="0 1 0 3.142  0 1 0 1.5709"/>
    <PositionInterpolator DEF="WWWW1" key="0 1"  keyValue="8.65 0.08 8  0 -1.237 -1.55"/>
    <OrientationInterpolator DEF="WWWW2" key="0 1"  keyValue="0 1 0 3.142  0 1 0 1.5709"/>
    <PositionInterpolator DEF="B1" key="0 1"  keyValue="-2.4 0 0  -7.5 2.9 -12.6"/>
    <OrientationInterpolator DEF="B2" key="0 1"  keyValue="0 0 0 0  1 0 0 0.3"/>
    <PositionInterpolator DEF="BB1" key="0 1"  keyValue="-1.2 0 0  -7.5 2.9 -12.6"/>
    <OrientationInterpolator DEF="BB2" key="0 1"  keyValue="0 0 0 0  1 0 0 0.3"/>
    <PositionInterpolator DEF="BBB1" key="0 1"  keyValue="0 0 0  -7.5 2.9 -12.6"/>
    <OrientationInterpolator DEF="BBB2" key="0 1"  keyValue="0 0 0 0  1 0 0 0.3"/>

    <PositionInterpolator DEF="N1" key="0 1"  keyValue="3.3 -0.3 11.4  -0.005 -1.24 -1.9"/>
    <OrientationInterpolator DEF="N2" key="0 1"  keyValue="0 0 0 0  1 0 0 0.3"/>
    <PositionInterpolator DEF="NN1" key="0 1"  keyValue="3.3 -0.6 11.4  -0.005 -1.24 -1.9"/>
    <OrientationInterpolator DEF="NN2" key="0 1"  keyValue="0 0 0 0  1 0 0 0.3"/>
    <PositionInterpolator DEF="NNN1" key="0 1"  keyValue="3.3 -0.9 11.4  -0.005 -1.24 -1.9"/>
    <OrientationInterpolator DEF="NNN2" key="0 1"  keyValue="0 0 0 0  1 0 0 0.3"/>
    <PositionInterpolator DEF="NNNN1" key="0 1"  keyValue="3.3 -1.2 11.4  -0.005 -1.24 -1.9"/>
    <OrientationInterpolator DEF="NNNN2" key="0 1"  keyValue="0 0 0 0  1 0 0 0.3"/>
    
    <ColorInterpolator DEF="R" key="0 0.7 0.7001 1" keyValue="1 0 0  1 0 0  0 0 0  0 0 0"/>

    <!--CARRIAGE-->
    <PositionInterpolator DEF="C1" key="0 0.030 0.0305 0.25 0.255 1"  keyValue="0 -1.15 0.78  0 0.8 -6.18  0 0.8 -6.18  0 -1.15 0.78  0 -1.15 0.78  0 -1.15 0.78"/>  
    <!--ZIP1-->
    <PositionInterpolator DEF="L1" key="0 0.03 1"  keyValue="0 0.2 0.56  0 2 -6.18  0 30 -120"/>   
 
    <!--PROPS-->
    <OrientationInterpolator id='P1'  key='0 0.002 0.004 0.006 0.008 0.010 0.012 0.014 0.016 0.018 0.020 0.022 0.024 0.026 0.028 0.030 0.032 0.034 0.036 0.038 0.040 0.042 0.044 0.046 0.048 0.050 0.052 0.054 0.056 0.058 0.060 0.062 0.064 0.066 0.068 0.070 0.072 0.074 0.076 0.078 0.080 0.082 0.084 0.086 0.088 0.090 0.092 0.094 0.096 0.098 0.100 0.102 0.104 0.106 0.108 0.110 0.112 0.114 0.116 0.118 0.120 0.122 0.124 0.126 0.128 0.130 0.132 0.134 0.136 0.138 0.140 0.142 0.144 0.146 0.148 0.150 0.152 0.154 0.156 0.158 0.160 0.162 0.164 0.166 0.168 0.170 0.172 0.174 0.176 0.178 0.180 0.182 0.184 0.186 0.188 0.190 0.192 0.194 0.196 0.198 0.200 0.202 0.204 0.206 0.208 0.210 0.212 0.214 0.216 0.218 0.220 0.222 0.224 0.226 0.228 0.230 0.232 0.234 0.236 0.238 0.240 0.242 0.244 0.246 0.248 0.250 0.252 0.254 0.256 0.258 0.260 0.262 0.264 0.266 0.268 0.270 0.272 0.274 0.276 0.278 0.280 0.282 0.284 0.286 0.288 0.290 0.292 0.294 0.296 0.298 0.300 0.302 0.304 0.306 0.308 0.310 0.312 0.314 0.316 0.318 0.320 0.322 0.324 0.326 0.328 0.330 0.332 0.334 0.336 0.338 0.340 0.342 0.344 0.346 0.348 0.350 0.352 0.354 0.356 0.358 0.360 0.362 0.364 0.366 0.368 0.370 0.372 0.374 0.376 0.378 0.380 0.382 0.384 0.386 0.388 0.390 0.392 0.394 0.396 0.398 0.400 0.402 0.404 0.406 0.408 0.410 0.412 0.414 0.416 0.418 0.420 0.422 0.424 0.426 0.428 0.430 0.432 0.434 0.436 0.438 0.440 0.442 0.444 0.446 0.448 0.450 0.452 0.454 0.456 0.458 0.460 0.462 0.464 0.466 0.468 0.470 0.472 0.474 0.476 0.478 0.480 0.482 0.484 0.486 0.488 0.490 0.492 0.494 0.496 0.498 0.500 0.502 0.504 0.506 0.508 0.510 0.512 0.514 0.516 0.518 0.520 0.522 0.524 0.526 0.528 0.530 0.532 0.534 0.536 0.538 0.540 0.542 0.544 0.546 0.548 0.550 0.552 0.554 0.556 0.558 0.560 0.562 0.564 0.566 0.568 0.570 0.572 0.574 0.576 0.578 0.580 0.582 0.584 0.586 0.588 0.590 0.592 0.594 0.596 0.598 0.600 0.602 0.604 0.606 0.608 0.610 0.612 0.614 0.616 0.618 0.620 0.622 0.624 0.626 0.628 0.630 0.632 0.634 0.636 0.638 0.640 0.642 0.644 0.646 0.648 0.650 0.652 0.654 0.656 0.658 0.660 0.662 0.664 0.666 0.668 0.670 0.672 0.674 0.676 0.678 0.680 0.682 0.684 0.686 0.688 0.690 0.692 0.694 0.696 0.698 0.700 0.702 0.704 0.706 0.708 0.710 0.712 0.714 0.716 0.718 0.720 0.722 0.724 0.726 0.728 0.730 0.732 0.734 0.736 0.738 0.740 0.742 0.744 0.746 0.748 0.750 0.752 0.754 0.756 0.758 0.760 0.762 0.764 0.766 0.768 0.770 0.772 0.774 0.776 0.778 0.780 0.782 0.784 0.786 0.788 0.790 0.792 0.794 0.796 0.798 0.800 0.802 0.804 0.806 0.808 0.810 0.812 0.814 0.816 0.818 0.820 0.822 0.824 0.826 0.828 0.830 0.832 0.834 0.836 0.838 0.840 0.842 0.844 0.846 0.848 0.850 0.852 0.854 0.856 0.858 0.860 0.862 0.864 0.866 0.868 0.870 0.872 0.874 0.876 0.878 0.880 0.882 0.884 0.886 0.888 0.890 0.892 0.894 0.896 0.898 0.900 0.902 0.904 0.906 0.908 0.910 0.912 0.914 0.916 0.918 0.920 0.922 0.924 0.926 0.928 0.930 0.932 0.934 0.936 0.938 0.940 0.942 0.944 0.946 0.948 0.950 0.952 0.954 0.956 0.958 0.960 0.962 0.964 0.966 0.968 0.970 0.972 0.974 0.976 0.978 0.980 0.982 0.984 0.986 0.988 0.990 0.992 0.994 0.996 0.998 1' keyValue='0 0 1 0  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 0  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317'/>

    <ROUTE fromNode='pack1' fromField='touchTime' toNode='tp' toField='set_startTime'></ROUTE>
    <Route fromNode="tp" fromField ="fraction_changed" toNode="MP" toField="set_fraction"></Route>
    <Route fromNode="MP" fromField ="value_changed" toNode="movePack" toField="translation"></Route>
    
    <ROUTE fromNode='mech1' fromField='touchTime' toNode='to1' toField='set_startTime'></ROUTE>
    <Route fromNode='to1' fromField='fraction_changed' toNode='d1' toField='set_fraction'></Route>
    <Route fromNode='d1' fromField='value_changed' toNode='dr1' toField='set_rotation'></Route>
    <Route fromNode='to1' fromField='fraction_changed' toNode='d2' toField='set_fraction'></Route>
    <Route fromNode='d2' fromField='value_changed' toNode='dl1' toField='set_rotation'></Route>
    
    <ROUTE fromNode='pack1' fromField='touchTime' toNode='tc1' toField='set_startTime'></ROUTE>
    <Route fromNode='tc1' fromField='fraction_changed' toNode='dd1' toField='set_fraction'></Route>
    <Route fromNode='dd1' fromField='value_changed' toNode='dr1' toField='set_rotation'></Route>
    <Route fromNode='tc1' fromField='fraction_changed' toNode='dd2' toField='set_fraction'></Route>
    <Route fromNode='dd2' fromField='value_changed' toNode='dl1' toField='set_rotation'></Route>
    
    <ROUTE fromNode='mech2' fromField='touchTime' toNode='to2' toField='set_startTime'></ROUTE>
    <Route fromNode='to2' fromField='fraction_changed' toNode='d3' toField='set_fraction'></Route>
    <Route fromNode='d3' fromField='value_changed' toNode='dr2' toField='set_rotation'></Route>
    <Route fromNode='to2' fromField='fraction_changed' toNode='d4' toField='set_fraction'></Route>
    <Route fromNode='d4' fromField='value_changed' toNode='dl2' toField='set_rotation'></Route>
    
    <ROUTE fromNode='pack1' fromField='touchTime' toNode='tc2' toField='set_startTime'></ROUTE>
    <Route fromNode='tc2' fromField='fraction_changed' toNode='dd3' toField='set_fraction'></Route>
    <Route fromNode='dd3' fromField='value_changed' toNode='dr2' toField='set_rotation'></Route>
    <Route fromNode='tc2' fromField='fraction_changed' toNode='dd4' toField='set_fraction'></Route>
    <Route fromNode='dd4' fromField='value_changed' toNode='dl2' toField='set_rotation'></Route>
    
    <ROUTE fromNode='mech3' fromField='touchTime' toNode='to3' toField='set_startTime'></ROUTE>
    <Route fromNode='to3' fromField='fraction_changed' toNode='d5' toField='set_fraction'></Route>
    <Route fromNode='d5' fromField='value_changed' toNode='dr3' toField='set_rotation'></Route>
    <Route fromNode='to3' fromField='fraction_changed' toNode='d6' toField='set_fraction'></Route>
    <Route fromNode='d6' fromField='value_changed' toNode='dl3' toField='set_rotation'></Route>
    
    <ROUTE fromNode='pack1' fromField='touchTime' toNode='tc3' toField='set_startTime'></ROUTE>
    <Route fromNode='tc3' fromField='fraction_changed' toNode='dd5' toField='set_fraction'></Route>
    <Route fromNode='dd5' fromField='value_changed' toNode='dr3' toField='set_rotation'></Route>
    <Route fromNode='tc3' fromField='fraction_changed' toNode='dd6' toField='set_fraction'></Route>
    <Route fromNode='dd6' fromField='value_changed' toNode='dl3' toField='set_rotation'></Route>
    
    <ROUTE fromNode='mech4' fromField='touchTime' toNode='to4' toField='set_startTime'></ROUTE>
    <Route fromNode='to4' fromField='fraction_changed' toNode='d7' toField='set_fraction'></Route>
    <Route fromNode='d7' fromField='value_changed' toNode='dr4' toField='set_rotation'></Route>
    <Route fromNode='to4' fromField='fraction_changed' toNode='d8' toField='set_fraction'></Route>
    <Route fromNode='d8' fromField='value_changed' toNode='dl4' toField='set_rotation'></Route>
    
    <ROUTE fromNode='pack1' fromField='touchTime' toNode='tc4' toField='set_startTime'></ROUTE>
    <Route fromNode='tc4' fromField='fraction_changed' toNode='dd7' toField='set_fraction'></Route>
    <Route fromNode='dd7' fromField='value_changed' toNode='dr4' toField='set_rotation'></Route>
    <Route fromNode='tc4' fromField='fraction_changed' toNode='dd8' toField='set_fraction'></Route>
    <Route fromNode='dd8' fromField='value_changed' toNode='dl4' toField='set_rotation'></Route>

    <ROUTE fromNode='zip1' fromField='touchTime' toNode='tZ11' toField='set_startTime'></ROUTE>
    <Route fromNode="tZ11" fromField ="fraction_changed" toNode="Z1" toField="set_fraction"></Route>
    <Route fromNode="Z1" fromField ="value_changed" toNode="ZIP11" toField="translation"></Route>

    <ROUTE fromNode='zip1' fromField='touchTime' toNode='tZ12' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ12' fromField='fraction_changed' toNode='Z2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='Z2' fromField='value_changed' toNode='ZIP11' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip1' fromField='touchTime' toNode='tZ13' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ13' fromField='fraction_changed' toNode='Z3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='Z3' fromField='value_changed' toNode='ZIP1' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip2' fromField='touchTime' toNode='tZ21' toField='set_startTime'></ROUTE>
    <Route fromNode="tZ21" fromField ="fraction_changed" toNode="ZZ1" toField="set_fraction"></Route>
    <Route fromNode="ZZ1" fromField ="value_changed" toNode="ZIP22" toField="translation"></Route>

    <ROUTE fromNode='zip2' fromField='touchTime' toNode='tZ22' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ22' fromField='fraction_changed' toNode='ZZ2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZ2' fromField='value_changed' toNode='ZIP22' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip2' fromField='touchTime' toNode='tZ23' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ23' fromField='fraction_changed' toNode='ZZ3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZ3' fromField='value_changed' toNode='ZIP2' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip3' fromField='touchTime' toNode='tZ31' toField='set_startTime'></ROUTE>
    <Route fromNode="tZ31" fromField ="fraction_changed" toNode="ZZZ1" toField="set_fraction"></Route>
    <Route fromNode="ZZZ1" fromField ="value_changed" toNode="ZIP33" toField="translation"></Route>

    <ROUTE fromNode='zip3' fromField='touchTime' toNode='tZ32' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ32' fromField='fraction_changed' toNode='ZZZ2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZZ2' fromField='value_changed' toNode='ZIP33' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip3' fromField='touchTime' toNode='tZ33' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ33' fromField='fraction_changed' toNode='ZZZ3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZZ3' fromField='value_changed' toNode='ZIP3' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip4' fromField='touchTime' toNode='tZ41' toField='set_startTime'></ROUTE>
    <Route fromNode="tZ41" fromField ="fraction_changed" toNode="ZZZZ1" toField="set_fraction"></Route>
    <Route fromNode="ZZZZ1" fromField ="value_changed" toNode="ZIP44" toField="translation"></Route>

    <ROUTE fromNode='zip4' fromField='touchTime' toNode='tZ42' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ42' fromField='fraction_changed' toNode='ZZZZ2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZZZ2' fromField='value_changed' toNode='ZIP44' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip4' fromField='touchTime' toNode='tZ43' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ43' fromField='fraction_changed' toNode='ZZZZ3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZZZ3' fromField='value_changed' toNode='ZIP4' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='wing1' fromField='touchTime' toNode='tW1' toField='set_startTime'></ROUTE>
    <Route fromNode="tW1" fromField ="fraction_changed" toNode="W1" toField="set_fraction"></Route>
    <Route fromNode="W1" fromField ="value_changed" toNode="WING1" toField="translation"></Route>

    <ROUTE fromNode='wing1' fromField='touchTime' toNode='tW2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tW2' fromField='fraction_changed' toNode='W2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='W2' fromField='value_changed' toNode='WING1' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='wing2' fromField='touchTime' toNode='tWW1' toField='set_startTime'></ROUTE>
    <Route fromNode="tWW1" fromField ="fraction_changed" toNode="WW1" toField="set_fraction"></Route>
    <Route fromNode="WW1" fromField ="value_changed" toNode="WING2" toField="translation"></Route>

    <ROUTE fromNode='wing2' fromField='touchTime' toNode='tWW2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tWW2' fromField='fraction_changed' toNode='WW2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='WW2' fromField='value_changed' toNode='WING2' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='wing3' fromField='touchTime' toNode='tWWW1' toField='set_startTime'></ROUTE>
    <Route fromNode="tWWW1" fromField ="fraction_changed" toNode="WWW1" toField="set_fraction"></Route>
    <Route fromNode="WWW1" fromField ="value_changed" toNode="WING3" toField="translation"></Route>

    <ROUTE fromNode='wing3' fromField='touchTime' toNode='tWWW2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tWWW2' fromField='fraction_changed' toNode='WWW2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='WWW2' fromField='value_changed' toNode='WING3' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='battery2' fromField='touchTime' toNode='tB1' toField='set_startTime'></ROUTE>
    <Route fromNode="tB1" fromField ="fraction_changed" toNode="B1" toField="set_fraction"></Route>
    <Route fromNode="B1" fromField ="value_changed" toNode="bat2" toField="translation"></Route>

    <ROUTE fromNode='battery2' fromField='touchTime' toNode='tB2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tB2' fromField='fraction_changed' toNode='B2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='B2' fromField='value_changed' toNode='bat2' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='battery4' fromField='touchTime' toNode='tBB1' toField='set_startTime'></ROUTE>
    <Route fromNode="tBB1" fromField ="fraction_changed" toNode="BB1" toField="set_fraction"></Route>
    <Route fromNode="BB1" fromField ="value_changed" toNode="bat4" toField="translation"></Route>

    <ROUTE fromNode='battery4' fromField='touchTime' toNode='tBB2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tBB2' fromField='fraction_changed' toNode='BB2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='BB2' fromField='value_changed' toNode='bat4' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='battery6' fromField='touchTime' toNode='tBBB1' toField='set_startTime'></ROUTE>
    <Route fromNode="tBBB1" fromField ="fraction_changed" toNode="BBB1" toField="set_fraction"></Route>
    <Route fromNode="BBB1" fromField ="value_changed" toNode="bat6" toField="translation"></Route>

    <ROUTE fromNode='battery6' fromField='touchTime' toNode='tBBB2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tBBB2' fromField='fraction_changed' toNode='BBB2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='BBB2' fromField='value_changed' toNode='bat6' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='noseCone1' fromField='touchTime' toNode='tN1' toField='set_startTime'></ROUTE>
    <Route fromNode="tN1" fromField ="fraction_changed" toNode="N1" toField="set_fraction"></Route>
    <Route fromNode="N1" fromField ="value_changed" toNode="nose1" toField="translation"></Route>

    <ROUTE fromNode='noseCone1' fromField='touchTime' toNode='tN2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tN2' fromField='fraction_changed' toNode='N2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='N2' fromField='value_changed' toNode='nose1' toField='set_rotation'></ROUTE>

     <ROUTE fromNode='noseCone2' fromField='touchTime' toNode='tNN1' toField='set_startTime'></ROUTE>
    <Route fromNode="tNN1" fromField ="fraction_changed" toNode="NN1" toField="set_fraction"></Route>
    <Route fromNode="NN1" fromField ="value_changed" toNode="nose2" toField="translation"></Route>

    <ROUTE fromNode='noseCone2' fromField='touchTime' toNode='tNN2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tNN2' fromField='fraction_changed' toNode='NN2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='NN2' fromField='value_changed' toNode='nose2' toField='set_rotation'></ROUTE>

     <ROUTE fromNode='noseCone3' fromField='touchTime' toNode='tNNN1' toField='set_startTime'></ROUTE>
    <Route fromNode="tNNN1" fromField ="fraction_changed" toNode="NNN1" toField="set_fraction"></Route>
    <Route fromNode="NNN1" fromField ="value_changed" toNode="nose3" toField="translation"></Route>

    <ROUTE fromNode='noseCone3' fromField='touchTime' toNode='tNNN2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tNNN2' fromField='fraction_changed' toNode='NNN2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='NNN2' fromField='value_changed' toNode='nose3' toField='set_rotation'></ROUTE>

     <ROUTE fromNode='noseCone4' fromField='touchTime' toNode='tNNNN1' toField='set_startTime'></ROUTE>
    <Route fromNode="tNNNN1" fromField ="fraction_changed" toNode="NNNN1" toField="set_fraction"></Route>
    <Route fromNode="NNNN1" fromField ="value_changed" toNode="nose4" toField="translation"></Route>

    <ROUTE fromNode='noseCone4' fromField='touchTime' toNode='tNNNN2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tNNNN2' fromField='fraction_changed' toNode='NNNN2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='NNNN2' fromField='value_changed' toNode='nose4' toField='set_rotation'></ROUTE>


    <ROUTE fromNode='e-stop' fromField='touchTime' toNode='tr' toField='set_startTime'></ROUTE>
    <Route fromNode="tr" fromField ="fraction_changed" toNode="R" toField="set_fraction"></Route>
    <Route fromNode="R" fromField ="value_changed" toNode="red" toField="diffuseColor"></Route>

    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp1' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp1' fromField='fraction_changed' toNode='P1' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='P1' fromField='value_changed' toNode='FOREPROP1' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp1' fromField='fraction_changed' toNode='P1' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='P1' fromField='value_changed' toNode='AFTPROP1' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp2' fromField='fraction_changed' toNode='P1' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='P1' fromField='value_changed' toNode='FOREPROP2' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp2' fromField='fraction_changed' toNode='P1' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='P1' fromField='value_changed' toNode='AFTPROP2' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp3' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp3' fromField='fraction_changed' toNode='P1' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='P1' fromField='value_changed' toNode='FOREPROP3' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp3' fromField='fraction_changed' toNode='P1' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='P1' fromField='value_changed' toNode='AFTPROP3' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp4' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp4' fromField='fraction_changed' toNode='P1' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='P1' fromField='value_changed' toNode='FOREPROP4' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp4' fromField='fraction_changed' toNode='P1' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='P1' fromField='value_changed' toNode='AFTPROP4' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='launch' fromField='touchTime' toNode='t12' toField='set_startTime'></ROUTE>
    <Route fromNode="t12" fromField ="fraction_changed" toNode="C1" toField="set_fraction"></Route>
    <Route fromNode="C1" fromField ="value_changed" toNode="CARRIAGE" toField="translation"></Route>

    <ROUTE fromNode='launch' fromField='touchTime' toNode='t13' toField='set_startTime'></ROUTE>
    <Route fromNode="t13" fromField ="fraction_changed" toNode="L1" toField="set_fraction"></Route>
    <Route fromNode="L1" fromField ="value_changed" toNode="ZIPA1" toField="translation"></Route>
     
    <Viewpoint id="default" position="24.22824 4.76052 5.82900" orientation="-0.04735 0.99816 0.03792 1.54815" 
  zNear="0.93444" zFar="80.42884" centerOfRotation="-8.00378 2.03186 5.05078" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
  
 <Viewpoint id="open1" position="1.72875 -0.07534 8.96527" orientation="0.00246 0.99998 0.00545 2.83544" 
  zNear="0.93444" zFar="80.42884" centerOfRotation="0.77825 -0.10656 11.97192" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="package" position="-2.57549 1.84550 6.08011" orientation="-0.02780 0.99910 0.03197 1.56060" 
  zNear="0.93444" zFar="80.42884" centerOfRotation="-7.89726 1.52872 6.02033" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="load" position="0.74760 -0.47507 9.00756" orientation="-0.00318 0.99933 -0.03639 3.15524" 
  zNear="0.93444" zFar="80.42884" centerOfRotation="0.78779 -0.25694 11.99682" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
  
  <Viewpoint id="props" position="1.40495 -1.15911 -0.18915" orientation="-0.04085 0.99781 0.05205 1.22942" 
  zNear="0.93444" zFar="80.42884" centerOfRotation="-0.03160 -1.27088 -0.70417" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="loadw" position="4.04206 1.10932 11.13289" orientation="-0.14180 -0.98000 -0.13963 0.91669" 
  zNear="0.93444" zFar="80.42884" centerOfRotation="8.74556 0.09459 7.36944" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="loadb" position="6.28133 0.09444 9.21186" orientation="-0.00149 0.98957 0.14406 3.07308" 
  zNear="0.93444" zFar="80.42884" centerOfRotation="6.10726 -0.64225 11.68456" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="loadn" position="3.53648 -0.01105 9.48060" orientation="-0.00149 0.98957 0.14406 3.07308" 
  zNear="0.93444" zFar="80.42884" centerOfRotation="3.36847 -0.72206 11.86708" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="estop" position="-0.67778 0.65206 1.42916" orientation="-0.17380 -0.98235 -0.06911 0.49867" 
  zNear="0.93444" zFar="80.42884" centerOfRotation="-0.03884 0.52739 0.23027" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="enable" position="-1.04532 -0.45523 1.31536" orientation="-0.22283 -0.97212 -0.07295 0.55861" 
  zNear="0.93444" zFar="80.42884" centerOfRotation="-0.37247 -0.62435 0.20155" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="launch 1" position="-1.50444 -0.18627 1.85593" orientation="-0.22283 -0.97212 -0.07295 0.55861" 
    zNear="0.93444" zFar="80.42884" centerOfRotation="-0.49701 -0.43949 0.18828" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="launch 2" position="1.67826 -0.53982 2.41757" orientation="-0.33345 0.94047 0.06586 0.43131" 
    zNear="0.93444" zFar="80.42884" centerOfRotation="-0.07536 -1.19020 -1.65672" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="view" position="3.57297 -0.28026 -1.17908" orientation="-0.09567 0.99263 0.07436 1.43119" 
  zNear="0.93444" zFar="80.42884" centerOfRotation="-7.89434 -2.13829 -2.86843" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

     
    <div id="camera_buttons" style="display: inline;">
    <button onClick="window.location.reload();"  onclick="document.getElementById('default').setAttribute('set_bind','true');" style="border: none; background-color: #f00; padding: 8px 12px; color: #fff;">Home</button>
    
    <button title="Select body by clicking on drop mech to open"  onclick="openDrop();" style="border: none; background-color: #fff; padding: 8px 12px; color: #f00;">Select</button>

    <button  onclick="document.getElementById('package').setAttribute('set_bind','true');" style="border: none; background-color: #f00; padding: 8px 12px; color: #fff;">Package</button>

    <button  onclick="document.getElementById('load').setAttribute('set_bind','true');" style="border: none; background-color: #fff; padding: 8px 12px; color: #f00;">Body</button>
    
    <button  onclick="document.getElementById('props').setAttribute('set_bind','true');" style="border: none; background-color: #f00; padding: 8px 12px; color: #fff;">Props</button>

    <button  onclick="document.getElementById('loadw').setAttribute('set_bind','true');" style="border: none; background-color: #fff; padding: 8px 12px; color: #f00;">Wing</button>

    <button  onclick="document.getElementById('loadb').setAttribute('set_bind','true');" style="border: none; background-color: #f00; padding: 8px 12px; color: #fff;">Battery</button>

    <button  onclick="document.getElementById('loadn').setAttribute('set_bind','true');" style="border: none; background-color: #fff; padding: 8px 12px; color: #f00;">Nose</button>
    
    <button  onclick="checks();" style="border: none; background-color: #f00; padding: 8px 12px; color: #fff;">Checks</button>

    <button onclick="document.getElementById('estop').setAttribute('set_bind','true');" style="border: none; background-color: #fff; padding: 8px 12px; color: #f00;">E-Stop</button>

    <button onclick="document.getElementById('enable').setAttribute('set_bind','true');" style="border: none; background-color: #f00; padding: 8px 12px; color: #fff;">Enable</button>

    <button onclick="document.getElementById('launch 1').setAttribute('set_bind','true');" style="border: none; background-color: #fff; padding: 8px 12px; color: #f00;">Launch 1</button>

    <button  onclick="document.getElementById('launch 2').setAttribute('set_bind','true');" style="border: none; background-color: #f00; padding: 8px 12px; color: #fff;">Launch 2</button>

    <button  onclick="document.getElementById('view').setAttribute('set_bind','true');" style="border: none; background-color: #fff; padding: 8px 12px; color: #f00;">View</button>

    <button  onclick="document.getElementById('').setAttribute('set_bind','true');" style="border: none; background-color: #f00; padding: 8px 12px; color: #fff;">Spare</button>

    <button  onclick="document.getElementById('').setAttribute('set_bind','true');" style="border: none; background-color: #fff; padding: 8px 12px; color: #f00;">Spare</button>

    <button  onclick="helpMe();" style="border: none; background-color: #f00; padding: 8px 12px; color: #fff;">Help</button>

    <button onclick="feedback();" style="border: none; background-color: #fff; padding: 8px 12px; color: #f00;">Feedback</button>
 
    <button onclick="window.location.href = 'welcome.php'"; style="border: none; background-color: #f00; padding: 8px 12px; color: #fff;">Exit</button>
    
    <button title="click to mute/unmute" style='font-size:20px; color:red; cursor:pointer;' onclick="mute();"><i class='fas fa-volume-mute'></i></button>

    </scene>
    </x3d>
    </div>
  </body>
</html>
