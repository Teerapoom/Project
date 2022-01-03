<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>อีเมล์</title>
</head>
<style>
    .bgr {
        background-color: #FFF4E0;
    }

    .btn {
        background-color: #A66E00;
        border-radius: 10% / 50%;
        font-size: 14px;
        color: white;
    }

    .btn:hover {
        background-color: #FFCF73;
        color: #A66E00;

    }

    .btn1 {
        background-color: #E5E5E5;
        border-radius: 10% / 50%;
        font-size: 14px;
        color: #0C34C2;
        border: 1px solid #E5E5E5;
        margin-right: 50px;
        margin-left: 50px;
    }

    .btn1:hover {
        background-color: #b1dcf5f1;
        color: #0C34C2;
    }


    .btn2 {
        background-color: #0C34C2;
        color: #FFFFFF;
        border-radius: 10% / 50%;
        font-size: 14px;
        border: 1px solid #0C34C2;
        margin-right: 50px;
    }

    .btn2:hover {
        background-color: #57befaee;
        color: #728ff7;
    }

    .btn3 {
        background-color: #D11818;
        color: #FFFFFF;
        border-radius: 10% / 50%;
        font-size: 14px;
        font-size: 14px;
        border: 1px solid #D11818;
        margin-right: 50px;
        margin-left: 50px;

    }

    .btn3:hover {
        background-color: #f85252;
        color: #f5f3f3;
    }

    .hr {
        text-align: center
    }
    
</style>


<body class="bgr">
    <div class="container">
        <div class="head">

            <div class="row col-md-2 mx-auto">
                <div>
                    <img
                        src="https://scontent.xx.fbcdn.net/v/t1.15752-9/263800363_632087001314699_3746873862771308394_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=aee45a&_nc_eui2=AeEc5e_1GhX5Nj4wbhkcfOxf9HdN9pn8pZb0d032mfyllsd7Z6-TPxV20ZCrjbQuH-5u-e2jGKsnuQ8ClQGyMi79&_nc_ohc=FXfEjKEStgcAX8-h4kr&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVKv6AYEsOS-Dda4Ui01pLCjYq15aWXC9gs4kZfmJ_iVWg&oe=61DEFE02">
                </div>
            </div>

            <form action="">
                <div class="col-md-4 mx-auto">
                    <label for="Email"> อีเมล์ </label>
                    <input type="email" id="Email" class="form-control" name="Email" placeholder="" required />

                    <label for="Password"> รหัสผ่าน: </label>
                    <input type="password" id="Password" class="form-control" name="Password" placeholder="" required />
                    </label>

                    
                    <div class="col-md-5 mx-auto text-center" style="padding-bottom: 20px;">
                        <br />
                        <a href="สมัครสมาชิก.html" type="submit" class="btn " id="btnSubmit">เข้าสู่ระบบ</a>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn1 " id="btnforgotpassword">ลืมรหัสผ่าน</button>
                        
                        <button type="submit" class="btn1 " id="btnsubscribe">สมัครสมาชิก</button>
                    </div>

                    <div class="hr">
                        <hr> OR
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn2 " id="btnFacebook">Facebook</button>
                        <button type="submit" class="btn3 " id="btnGmail">Gmail</button>

                    </div>


                </div>
        </div>


</body>
<script>
    function btnSubmit() {
        var btnSubmit = $("#btnSubmit").val();

    }
    $("#btnSubmit").click(() => {
        var data = $.parseJSON(`{
            "Email": "${$("#Email").val()}",
			"Password": "${$("#Password").val()}"}`);

        console.log(data);
    })


</script>

</html>
