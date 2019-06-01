<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
  body {
    font-family: Arial;
    font-size: 17px;
    padding: 8px;
  }

  * {
    box-sizing: border-box;
  }

  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
  }

  .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
  }

  .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
  }

  .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
  }

  .col-25,
  .col-50,
  .col-75 {
    padding: 0 16px;
  }

  .container {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
  }

  input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  label {
    margin-bottom: 10px;
    display: block;
  }

  .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
  }

  .btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
  }

  .btn:hover {
    background-color: #45a049;
  }

  a {
    color: #2196F3;
  }

  hr {
    border: 1px solid lightgrey;
  }

  span.price {
    float: right;
    color: grey;
  }

  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
  }
</style>
</head>
<body>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="post" action="/check_out/{{$project->id}}"  enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="row">
          <div class="col-50">
            <h3>Төслийн дэлгэргүй</h3>
            <label for="fname"><i class="fa fa-user"></i>Төслийн дугаар</label>
            <input type="text" id="idid" name="id" value="{{$project->id}}" >  
            <label for="email"><i class="fa fa-list"></i> Төслийн нэр</label>
            <input type="text" id="idtitle" name="title" value="{{$project->title}}" disabled >  
            <label for="fname"><i class="fa fa-user"></i>Төслийн эзэмшигч</label>
            <input type="text" id="fname" name="firstname" value="{{$project->owner_id}}" disabled >
            <label for="email"><i class="fa fa-list"></i> Төслийн нэр</label>
            <input type="text" id="email" name="email" value="{{$project->title}}" disabled > 
            <label for="adr"><i class="fa fa-money"></i> Шаардлагатай мөнгөн дүн </label>
            <input type="text" id="adr" name="address" value="{{$project->amount}}" disabled >
            <textarea disabled style="width: 100%;" rows="5">{{$project->shortsummary}}</textarea>
          </div>

          <div class="col-50">
            <center><h3>Хандивлах</h3></center>
            <div style="font-size: 15px;">
              <label for="fname">Зөвшөөрөгдсөн картууд</label>
              <div class="icon-container" style="margin-top: -20px;">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
            </div>
            Хэрэглэгчээр <a href="/login"><b style="color: blue; text-decoration: underline;"> нэвтрэх ?</b></a>
            <input required type="text" id="id_fullname" name="name_fullname" placeholder="Таны бүтэн нэр">
            <input required type="text" id="id_email" name="name_email" placeholder="Цахим хаяг">
            <input required type="checkbox" name=""> Хэн гэдгээ мэдэгдүүлэхгүй хандивлах ? 
            <label for="cname">Карт эзэмшигч</label>
            <input required type="text" id="id_owner" name="name_owner" placeholder="Карт эзэмшигч">            
            <label for="ccnum">Картын мэдээлэл</label>
            <input required type="text" id="id_cardnumber" name="name_cardnumber" style="width: 50%;" placeholder="Картын дугаар">
            <input required type="text" id="id_expire" name="name_expire" style="width: 20%;" placeholder="MM/YY" onchange="myFunction()">
            <input required type="text" id="id_expire" name="name_CVV" style="width: 20%;" placeholder="CVV" onchange="">
            <div  class="text-right">
            <label for="ccnum">Таны хандивлах мөнгөн дүн</label>
            <input required class="form-control" type="number" id="id_amount" name="name_amount" placeholder="₮" style="direction: rtl;">
            </div>
            <!--  <p>Нийт <span class="price" style="color:black"><b>₮30</b></span></p> -->
          </div>
          
        </div>
        <input type="submit" value="Үргэлжлүүлэх" class="btn">
      </form>
       <hr>  
       <center>
            <div style="">
            <h5 style="font-size: 10px; ">Эсвэл Paypal ашиглах </h5> 
            <script src="https://www.paypalobjects.com/api/button.js?"
                 data-merchant="braintree"
                 data-id="paypal-button"
                 data-button="checkout"
                 data-color="gold"
                 data-size="medium"
                 data-shape="pill"
                 data-button_type="submit"
                 data-button_disabled="false"
             ></script>
            </div>
         
       </center>
    </div>
  </div>
</div>
<script type="text/javascript">

        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
</script>

</body>
</html>
