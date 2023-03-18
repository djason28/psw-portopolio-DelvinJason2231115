<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Delvin Jason</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" type="text/css" href={{asset('cssfile/style.css')}}>
  <link rel="stylesheet" type="text/css" href={{asset('cssfile/navbar.css')}}>
  <link rel="stylesheet" type="text/css" href={{asset('cssfile/footer.css')}}>
  <link rel="stylesheet" type="text/css" href={{asset('cssfile/slider.css')}}>
  <link rel="stylesheet" type="text/css" href={{asset('cssfile/card.css')}}>
  <link rel="stylesheet" type="text/css" href={{asset('cssfile/cv.css')}}>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<main>
    <body>
  <header id="header" class="">
    <div class="d-flex flex-column">
        <x-navbar/>
    </div>
  </header>
    <x-slider />
    <x-about />
    <x-cv />
    <x-portofolio />
</body>
    <x-footer />
</main>
</html>

