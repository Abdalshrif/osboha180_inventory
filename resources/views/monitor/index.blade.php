@extends('layouts.app')

@section('content')

<!-- Start Info -->
<div class="information" id="information">
    <h2 class="main-title">Your Information</h2>

    <div class="container">
       <div class="box">
          <i class="fas fa-user-tie fa-4x"></i>
          <h3>Name</h3>
         <div class="info">
             <a href="#">Details</a>
         </div>
       </div>

       <div class="box">
            <i class="fas fa-user-check fa-4x"></i>
            <h3>Name Of Presnt Monitor </h3>
         <div class="info">
            <a href="#">Details</a>
         </div>
      </div>

      <div class="box">
          <i class="fas fa-user-slash fa-4x"></i>
          <h3>Name Of Last Monitor</h3>
        <div class="info">
            <a href="#">Details</a>
        </div>
      </div>

      <div class="box">
          <i class="fas fa-check-circle fa-4x"></i>
          <h3>Your Status</h3>
        <div class="info">
            <a href="#">Details</a>
        </div>
      </div>

      <div class="box">
           <i class="far fa-calendar-alt fa-4x"></i>
          <h3>Date Of Employment</h3>
        <div class="info">
            <a href="#">Details</a>
        </div>
      </div>

      <div class="box">
          <i class="fas fa-sign-in-alt fa-4x"></i>
          <h3>Join Date</h3>
        <div class="info">
            <a href="#">Details</a>
        </div>
      </div>

    </div>
</div>
<!-- End Info -->


<!-- Start Inventory -->
 <div class="inventory" id="inventory">
    <h2 class="main-title">Week Inventory</h2>
       <div class="container">

       <div class="info">
          <div class="time">
              <div class="unit container-day">
                  <span class="days">01</span>
                  <span>Days</span>
              </div>

            <div class="unit container-hour">
                <span class="hours">02</span>
                <span>Hours</span>
            </div>

            <div class="unit container-minute">
                <span class="minutes">03</span>
                <span>Minutes</span>
            </div>

            <div class="unit container-second">
                <span class="seconds">04</span>
                <span>Seconds</span>
            </div>
        </div>

         <h2 class="title">Time to Complete the invertory</h2>

      </div>
      <img src="{{asset('asset/Images/timer.png')}}" alt="">
   </div>
 </div>

 <div class="section">
  <div class="container">
     <div class="box">
         <h2 class="Title"><i class="far fa-address-card"> add leader</i> </h2>

     <form action="">
        <div class="col-auto">
            <input class="form-control mb-2" type="text" placeholder="Enter Name Of Leader">
         </div>

         <div class="col-auto">
            <input class="form-control mb-2" type="text" placeholder="Enter Name Of Team">
         </div>
    </form>
   </div>

 <div class="box">
    <form action="">
        <select class="form-select select mb-2" aria-label="Default select example">
            <option selected class="Title">Chose the name of leader</option>
            <option value="1">Ali</option>
            <option value="2">Ahmed</option>
            <option value="3">Amjam</option>
        </select>

    <input class="form-control mb-2" type="text" placeholder="Enter Group Number">
    <input class="form-control mb-2" type="text" placeholder="Enter Group of Rate">
</div>

 <div class="box">
    <h2 class="Title">Share followed by the weekly</h2>

  <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault    id="flexRadioDefault1">
     <label class="form-check-label0" for="flexRadioDefault">
        shared
     </label>
  </div>

 <div class="form-check">
     <input class="form-check-input" type="radio" name="flexRadioDefaul id="flexRadioDefault1" checked>
   <label class="form-check-label1" for="flexRadioDefault">
     Do not share
  </label>
</div>

<div class="form-check">
     <input class="form-check-input" type="radio" name="flexRadioDefaulid="flexRadioDefault1" checked>
   <label class="form-check-label2" for="flexRadioDefault">
      Done by someone
   </label>
 </div>

<div class="multi-selector">
    <div class="select-field">
        <input type="text" name="" placeholder="Not Surveyed Standards" class="input-selctor">
         <span class="down-arrow">&blacktriangledown;</span>
   </div>

 <div class="list">
      <label for="task1" class="task">
          <input type="checkbox" name="" id="task1">
             Time
         <span></span>
     </label>

     <label for="task2" class="task">
       <input type="checkbox" name="" id="task2">
            Picture
       <span></span>
    </label>

    <label for="task3" class="task">
       <input type="checkbox" name="" id="task3">
            Tag for an ambassadors
        <span></span>
    </label>

    <label for="task4" class="task">
      <input type="checkbox" name="" id="task4">
            Week number and month
      <span></span>
    </label>

     <label for="task5" class="task">
         <input type="checkbox" name="" id="task5">
           a motivational phrase
         <span></span>
    </label>

     <label for="task6" class="task">
       <input type="checkbox" name="" id="task6">
            an appropriate picture
        <span></span>
     </label>

     <label for="task7" class="task">
        <input type="checkbox" name="" id="task7">
            Comment News
         <span></span>
    </label>

     <label for="task8" class="task">
        <input type="checkbox" name="" id="task8">
            Separate Comment for every ambassador
        <span></span>
     </label>

     </div>
  </div>
</div>

<div class="box">
   <h2 class="Title">Transfer News</h2>
  <select class="form-select select mb-2" aria-label="Default select example">
     <option selected class="Title">Chose The News</option>
     <option value="1">News1</option>
     <option value="2">News2</option>
     <option value="3">News3</option>
  </select>

  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefaultid="flexRadioDefault3" checked>
<label class="form-check-label3" for="flexRadioDefault">
   Shared
</label>
</div>

<div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefaultid="flexRadioDefault3" checked>
<label class="form-check-label4" for="flexRadioDefault">
   Do not Share
</label>
</div>

<div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefaultid="flexRadioDefault3" checked>
<label class="form-check-label5" for="flexRadioDefault">
   Not Surveyed Standards
</label>
</div>

 </div>

 <div class="box">
    <h2 class="Title">Read The Leaders</h2>

    <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefaultid="flexRadioDefault3" checked>
      <label class="form-check-label6" for="flexRadioDefault">
         Reading
      </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefaulid="flexRadioDefault3" checked>
        <label class="form-check-label7" for="flexRadioDefault">
            Do not read
    </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" checked>
    <label class="form-check-label8" for="flexRadioDefault">
            Read after the end of time
    </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefaulid="flexRadioDefault3" checked>
    <label class="form-check-label9" for="flexRadioDefault">
        Read and did not vote in the control group
    </label>
  </div>

 </div>

 <div class="box">
        <h2 class="Title">Media Support</h2>
     <div class="form-check">
         <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault">
     <label class="form-check-label10" for="flexRadioDefault">
           shared
     </label>
    </div>

     <div class="form-check">
         <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" checked>
      <label class="form-check-label11" for="flexRadioDefault">
           Do not share
      </label>
     </div>

      <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" checked>
         <label class="form-check-label12" for="flexRadioDefault">
            Done by someone
         </label>
      </div>

<div class="multi-selector2">
  <div class="select-field2">
      <input type="text" name="" placeholder="Not Surveyed Standards" class="input-selctor">
      <span class="down-arrow2">&blacktriangledown;</span>
  </div>

  <div class="list2">
      <label for="task1" class="task2">
          <input type="checkbox" name="" id="task1">
          Share in Suitable time
          <span></span>
      </label>

      <label for="task2" class="task2">
         <input type="checkbox" name="" id="task2">
         Tag for an ambassadors
         <span></span>
     </label>

     <label for="task3" class="task2">
         <input type="checkbox" name="" id="task3">
         Aske about how to support
         <span></span>
     </label>

     <label for="task4" class="task2">
         <input type="checkbox" name="" id="task4">
         an appropriate picture
         <span></span>
     </label>

     <label for="task5" class="task2">
         <input type="checkbox" name="" id="task5">
         Mention how to votin
         <span></span>
     </label>

     <label for="task6" class="task2">
         <input type="checkbox" name="" id="task6">
         Repeat the tag an friday
         <span></span>
     </label>

     <label for="task7" class="task2">
         <input type="checkbox" name="" id="task7">
         Mention Support Options
         <span></span>
     </label>
   </div>
 </div>
 </div>

<div class="box">
   <h2 class="Title">First Markers</h2>
   <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault">
    <label class="form-check-label13" for="flexRadioDefault">
      shared
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" checked>
    <label class="form-check-label14" for="flexRadioDefault">
      Do not share
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" checked>
    <label class="form-check-label15" for="flexRadioDefault">
      Done by someone
    </label>
  </div>

<div class="multi-selector3">
  <div class="select-field3">
     <input type="text" name="" placeholder="Not Surveyed Standards" class="input-selctor">
     <span class="down-arrow3">&blacktriangledown;</span>
 </div>

<div class="list3">
        <label for="task1" class="task3">
            <input type="checkbox" name="" id="task1">
                Share in Suitable time
            <span></span>
        </label>

        <label for="task2" class="task3">
            <input type="checkbox" name="" id="task2">
                Tag for an ambassadors
            <span></span>
        </label>

        <label for="task3" class="task3">
            <input type="checkbox" name="" id="task3">
                Tell an ambassadors what is reduction
            <span></span>
        </label>

        <label for="task4" class="task3">
            <input type="checkbox" name="" id="task4">
            picture from the website
            <span></span>
        </label>

     </div>
   </div>

 </div>


   <div class="box">
       <h2 class="Title">Finalist Markers</h2>

       <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault">
        <label class="form-check-label16" for="flexRadioDefault">
           shared
         </label>
      </div>

      <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" checked>
        <label class="form-check-label17" for="flexRadioDefault">
           Do not share
        </label>
      </div>

      <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" checked>
        <label class="form-check-label18" for="flexRadioDefault">
            Done by someone
        </label>
      </div>

   </div>

   <div class="box">
       <h2 class="Title">Enter the links  of Withdrawn</h2>

       <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" checked>
        <label class="form-check-label19" for="flexRadioDefault">
           Done the Inputting
        </label>
      </div>

      <div class="form-check">
           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" checked>
        <label class="form-check-label20" for="flexRadioDefault">
           Don't do Inputting
        </label>
      </div>

      <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" checked>
        <label class="form-check-label21" for="flexRadioDefault">
           There is no Withdrawn
        </label>
      </div>

      <div class="col-auto">
        <input class="form-control mb-2" type="text" placeholder="Enter Number Of withdrawn ">
     </div>

   </div>

   <div class="box">
       <h2 class="Title">Proofing Finalist Markers </h2>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" checked>
      <label class="form-check-label22" for="flexRadioDefault">
         Done
      </label>
     </div>

      <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" checked>
        <label class="form-check-label23" for="flexRadioDefault">
           Not Done
        </label>
      </div>

      <div class="form-check">
           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" checked>
        <label class="form-check-label24" for="flexRadioDefault">
            This commander has not been proofing this week
        </label>

        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Proofing Message</label>
            <input type="file" class="form-control" id="inputGroupFile01">
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Commander's reply</label>
            <input type="file" class="form-control" id="inputGroupFile01">
       </div>

      </div>
   </div>

<div class="box">
    <h2 class="Title"> additives on monitor work</h2>

    <div class="input-group mb-3">
       <label class="input-group-text" for="inputGroupFile01">
           Communicate With the leader who has not entered the links
      </label>
        <input type="file" class="form-control" id="inputGroupFile01">
   </div>

   <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupFile01">
            Activities and additional ideas
        </label>
        <input type="file" class="form-control" id="inputGroupFile01">
  </div>
</div>

<div class="box">
    <h2 class="Title">Frequent Notes</h2>

    <div class="multi-selector4">

        <div class="select-field4">
            Leaders have been infected
           <input type="text" name="" placeholder=" " class="input-selctor">
           <span class="down-arrow4">&blacktriangledown;</span>
        </div>

        <div class="list4">
           <label for="task1" class="task4">
               <input type="checkbox" name="" id="task1">
                 Leader One
             <span></span>
          </label>

         <label for="task1" class="task4">
            <input type="checkbox" name="" id="task1">
               Leader Three
            <span></span>
        </label>

        <label for="task1" class="task4">
            <input type="checkbox" name="" id="task1">
               Leader Four
            <span></span>
        </label>

    </div>
</div>

<div class="multi-selector5 mt-2">

    <div class="select-field5">
          Leaders are latens on first markers
       <input type="text" name="" placeholder=" " class="input-selctor">
       <span class="down-arrow5">&blacktriangledown;</span>
   </div>

    <div class="list5">
      <label for="task1" class="task5">
         <input type="checkbox" name="" id="task1">
           Leader One
         <span></span>
     </label>

     <label for="task1" class="task5">
        <input type="checkbox" name="" id="task1">
           Leader Three
        <span></span>
    </label>

    <label for="task1" class="task5">
        <input type="checkbox" name="" id="task1">
           Leader Four
        <span></span>
    </label>

  </div>
</div>

<div class="multi-selector6 mt-2">
    <div class="select-field6">
          Leaders do not arrive at the news
       <input type="text" name="" placeholder=" " class="input-selctor">
       <span class="down-arrow6">&blacktriangledown;</span>
   </div>

    <div class="list6">
     <label for="task1" class="task6">
         <input type="checkbox" name="" id="task1">
             Leader One
         <span></span>
    </label>

     <label for="task1" class="task6">
        <input type="checkbox" name="" id="task1">
             Leader Three
        <span></span>
    </label>

    <label for="task1" class="task6">
        <input type="checkbox" name="" id="task1">
           Leader Four
        <span></span>
    </label>

    </div>
</div>

<div class="multi-selector7 mt-2">
    <div class="select-field7">
          Leaders are lastens at publication
       <input type="text" name="" placeholder="" class="input-selctor">
       <span class="down-arrow7">&blacktriangledown;</span>
    </div>

    <div class="list7">
      <label for="task1" class="task7">
         <input type="checkbox" name="" id="task1">
            Leader One
         <span></span>
     </label>

     <label for="task1" class="task7">
        <input type="checkbox" name="" id="task1">
           Leader Three
        <span></span>
    </label>

    <label for="task1" class="task7">
        <input type="checkbox" name="" id="task1">
           Leader Four
        <span></span>
   </label>
  </div>
</div>

<div class="multi-selector8 mt-2">
    <div class="select-field8">
          Leaders for alleviating week
       <input type="text" name="" placeholder="" class="input-selctor">
       <span class="down-arrow8">&blacktriangledown;</span>
   </div>

    <div class="list8">
      <label for="task1" class="task8">
         <input type="checkbox" name="" id="task1">
            Leader One
         <span></span>
     </label>

     <label for="task1" class="task8">
        <input type="checkbox" name="" id="task1">
           Leader Three
        <span></span>
    </label>

    <label for="task1" class="task8">
        <input type="checkbox" name="" id="task1">
           Leader Four
        <span></span>
    </label>

    </div>
</div>

 </div>
    <div class="box">
        <h2 class="Title">View inverntory information</h2>
        <button class="btn btn-primary">Show</button>
    </div>

      </form>
        </div>
            </div>
@endsection


