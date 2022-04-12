<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    
</head>
<body>

<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/home">HOME</a>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li> -->
</ul>




<h1 align="center">Recycling Mobile Devices</h1>
</br>
</br>



<div class="container">
<div class="row">
    <div class="col">

<p>Throwing away a cellular smartphone is banned in states like Maine and California. This is due to the damage due by cell phones to the surroundings. Therefore, to reduce this pollution, recycling cell phones is the best alternative available these days.</p></br>
<p>Another gain of recycling cellular telephones is that it enables energy conservation. According to current records, it’s far found that recycling an unmarried mobile smartphone allows the conservation of energy required by a PC to go on for forty hours. So, imagine the quantity of strength saved on recycling 1 thousand or 1 million mobile telephones. You might also surprise how does recycling assist in energy conservation? When the pre-present fabric is used or reused, the strength required to produce and transport the latest merchandise is saved.</p>

    </div>

  <!-- <div class="row"> -->
      
    <div class="col">

    <form action="{{route('remos.addData')}}" method="POST">
    @csrf

    <div class="input-group mb-3">
  <label class="input-group-text"  for="inputGroupSelect01">Options</label>
  <select class="form-select" name="bt1" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">Samsung</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
  </h5></br>

  <div class="input-group mb-3">
  <label class="input-group-text"  for="inputGroupSelect01">Options</label>
  <select class="form-select" name="bt2" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
      
</h5></br>
<h5 align="center">Switch On
<input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btncheck1"></label>

  Broken
  <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck2"></label></h5>




    </div>





    <div class="col">
    <img src="https://f3.onrecycle.co.uk/files/images/site-blog/large/536.jpg" class="img-thumbnail" alt="img1" width="400" height="200"></br>
    <img src="https://th.bing.com/th/id/OIP.uhhlF7dhJx7v4VMhifpDuQHaDW?pid=ImgDet&rs=1" class="img-thumbnail" alt="img2" width="400" height="200">
    </div>
  </div>
</br>
</br>







  <div class="row">
    <div class="col">
        
    <h3>Payment Receving Mode:</h3>
</br>


    <img src="https://th.bing.com/th/id/R.8486189aadc4809ebd8edfe89452e223?rik=PlFXuH6ydcDdPg&riu=http%3a%2f%2fwww.financeservices.us%2fwp-content%2fuploads%2f2019%2f03%2fVisa-Card.png&ehk=UrauTSaygecfL6eWOX8t6KQgViCb%2bZS4Jhh23GVMPmg%3d&risl=&pid=ImgRaw&r=0" class="img-thumbnail" alt="img3" width="100" height="200">
    <img src="https://oddslifenetstorage.blob.core.windows.net/paymentexpert/2019/02/39070363_l.jpg" class="img-thumbnail" alt="img4" width="100" height="200">
    <img src="https://th.bing.com/th/id/R.baff77edb197c7c0a180eca4a5ed2cf7?rik=l3nzeWAhlp5CQA&riu=http%3a%2f%2fcarti.completecare.com%2fportals%2f23%2fImages%2famex.png&ehk=SEzHwn%2fSVVwBBw9blbl6jLB0mgbiZK%2bLn65pBgNkLMk%3d&risl=&pid=ImgRaw&r=0" class="img-thumbnail" alt="img5" width="100" height="200">
    <img src="https://th.bing.com/th/id/OIP.WhLTX_nhQdAu-BZlT7dRcAHaHa?pid=ImgDet&rs=1" class="img-thumbnail" alt="img6" width="100" height="200">
</div>
    






    <div class="col">
     
<!-- <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" >
<h5 align="center">I AGREE TERMS AND CONDITION
  <label class="btn btn-outline-primary" for="btncheck1"></h5> -->
  <!-- <x-jet-validation-errors class="mb-4" /> -->

  <div class="input-group mb-3">
  <div class="input-group-text">
    <input class="form-check-input mt-0" type="checkbox" name="terms" value="" aria-label="Checkbox for following text input" ><h6>I AGREE TERMS AND CONDITION</h6>
     
  </div>
  
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">RECYCLE</button></form>
  </div>

    </div>






    
  </div>
</div>
@yield('content')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>