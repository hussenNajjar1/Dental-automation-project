

<style>

body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->











<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form  action="{{route('AL_NOUR.update',$user_u->id)}}" method="post">
            @csrf
                <h3>التعديل على البيانات</h3>
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" value="{{$user_u->name}}" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="age" class="form-control" placeholder="Your Email *"  value="{{$user_u->age}}"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="addres" class="form-control" placeholder="Your Phone Number *"value="{{$user_u->addres}}" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="day" class="form-control" placeholder="Your Phone Number *" value="{{$user_u->day}}"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="hour" class="form-control" placeholder="Your Phone Number *"value="{{$user_u->hour}}" />
                        </div>
                        <div class="form-group">
                            <input type="date" name="date_time" class="form-control" placeholder="Your Phone Number *"value="{{$user_u->hour}}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnContact" value="Send Message" />
                        </div>
                    </div>

                </div>
            </form>


            update


</div>