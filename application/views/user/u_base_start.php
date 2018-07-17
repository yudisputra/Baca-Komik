<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome User | Baca Komik Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/reading.png')?>" type="image/x-icon" />
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

        <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript" class="init">
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
           font-family: 'Segoe UI';
        }
            /* tinggi card */
        .post-body {
            height: 215px;
            position: relative;
            padding: 20px 15px 0;
        }

        /* untuk menghilangkan padding pada .panel-heading */
        .post-thumb {
            padding: 0
        }

        /* mengatur font dan link judul artikel*/
        .post-title a {
            color: rgba(0,0,0,0.7);
            font-weight: 700;
            font-size: 15px;
            line-height: 1.5em;
            letter-spacing: 0.01rem;
        }
        .post-title a:hover { text-decoration: none }

        /* posisi author selalu di bawah */
        .post-author {
            position: absolute;
            bottom: 15px;
            left: 15px;
            font-size: 13px;
        }

        .post-author .author-photo {
            margin-right: 10px;
            border-radius: 50%;
        }
    </style>
    
</head>
<body>

