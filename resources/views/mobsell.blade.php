
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>       
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
.title-style{
font-family: Georgia, 'Times New Roman', Times, serif;
font-weight: 700;
font-size: 20px;
color: hsl(52, 0%, 98%);
}
.title-quote{
font-family: Georgia, 'Times New Roman', Times, serif;
font-weight: 400;
color: hsl(52, 0%, 98%);
}
</style>
</head>


<body>

<div class="container">
  <div class="row">
  <div class="row">
    <div class="col-sm"></br>
</br>
    <img src="https://mdbcdn.b-cdn.net/img/Others/extended-example/delivery.webp" alt="Sample photo"
              class="img-fluid w-100 h-75 " />
   
    <div class="col">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
              <div class=" justify-content-center align-items-center">
                <div class=" text-center" style="margin-top: -300px;">
                  <i class="fas fa-truck text-white fa-3x"></i>
                  <p class="text-white title-style">Lorem ipsum delivery</p>
                  <p class="text-white mb-0"></p>

                  <figure class="text-center mb-0">
                    <blockquote class="blockquote text-white">
                      <p class="pb-3">
                        <i class="fas fa-quote-left fa-xs text-primary"
                          style="color: hsl(210, 100%, 50%) ;"></i>
                        <span class="lead font-italic">Everything at your doorstep.</span>
                        <i class="fas fa-quote-right fa-xs text-primary"
                          style="color: hsl(210, 100%, 50%) ;"></i>
                      </p>
                    </blockquote>

                  </figure>
                </div>
                </div>
</div>
</div>
</div>
<div class="col">
<form action="{{route('mobsells.addData')}}" method="POST">
    @csrf

</br>
</br>
              <h3 class="mb-4 text-uppercase">Delivery Info</h3>
              
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                  
                    <input type="text" id="form3Example1m" name="fnt" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example1m">First name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example1n" name="lnt" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example1n">Last name</label>
                  </div>
                </div>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form3Example8" name="addt" class="form-control form-control-lg" />
                <label class="form-label" for="form3Example8">Address</label>
                <input type="text" id="form3Example3" name="pt" class="form-control form-control-lg" />
                <label class="form-label" for="form3Example3">Pin</label>
              </div>



              <div class="row">
                <div class="col-md-6 mb-4">

                  <select class="select" name="st">
                    <option value="1">State</option>
                    <option value="2">Option 1</option>
                    <option value="3">Option 2</option>
                    <option value="4">Option 3</option>
                  </select>

                </div>
                <div class="col-md-6 mb-4">

                  <select class="select" name="ci">
                    <option value="1">City</option>
                    <option value="2">Option 1</option>
                    <option value="3">Option 2</option>
                    <option value="4">Option 3</option>
                  </select>

                </div>
              </div>

              
              <div class="form-outline mb-4">
                <input type="text" id="form3Example2" name="et" class="form-control form-control-lg" />
                <label class="form-label" for="form3Example2">Email</label>
                <input type="text" id="form3Example2" name="pht" class="form-control form-control-lg" />
                <label class="form-label" for="form3Example2">Phone Number</label>
              </div>

              <div class="d-flex justify-content-end pt-3">
                <!-- <button type="button" class="btn btn-success btn-lg ms-2"
                  style="background-color:hsl(210, 100%, 50%) ">Place order</button></form> -->
                  <button type="submit" class="btn btn-primary">Place order</button></form>
              </div>
</div>
</div>
</body>
</html>
 