<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Apple PC Website</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <div>
        @include('home.header')
    </div>
   <body>
   <table style="width:100%; border-collapse: collapse; margin: 20px;">
    <thead>
        <tr style="background-color: #4CAF50; color: white;">
            <th style="padding: 11px; border: 1px solid #ddd;">Product</th>
            <th style="padding: 11px; border: 1px solid #ddd;">Remark</th>
            <th style="padding: 11px; border: 1px solid #ddd;">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($appoint as $appoints)
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 15px; border: 1px solid #ddd;">{{$appoints->babysitter}}</td>
            <td style="padding: 15px; border: 1px solid #ddd;">{{$appoints->message}}</td>
            <td style="padding: 15px; border: 3px solid #ddd;"><a href="{{url('cancel_appointment',$appoints->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Cancel</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
        <div style="text-align: center; margin-top: 20px;">
            <a href="{{url('confirm_payment')}}" class="btn btn-primary" style="padding: 10px 20px; font-size: 16px;">Confirm Payment</a>
        </div>

   </body>
</html>