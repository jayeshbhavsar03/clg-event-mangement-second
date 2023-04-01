<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'home_header.php'; ?>

    <div class="heading">
        <h3>about us</h3>
    </div>

    <section class="about">

        <div class="flex">
            <p style="    font-size: 1.7rem;
    color: var(--black);">in this page the developer provide you whats is curricular activity,cocurricular activity and
                extension activity.</p>
            <div class="content">
                <h3>Curricular Activities</h3>
                <p>Curricular Activities: Basically speaking activities encompassing the prescribed courses of study
                    are called curricular or academic activities. In simple words it can be said that activities that
                    are undertaken inside the classroom,
                    in the laboratory, workshop or in library are called “curricular activities.”</p>
                <br>
                <h3>Co-curricular Activities</h3>
                <p>Co-curricular Activities are defined as the activities that enable to supplement and complement the curricular or main syllabi activities.
These are a very important part and parcel of educational institutions to develop the students’ personality as well as to strengthen classroom learning.</p>
                    <br>
                    <h3>Extension Activities</h3>
                <p>An extension activity is an activity that extends the learning of the lesson.
Extension activities can be done in small groups or by a single student. These extension activities are leveled to fit the student.</p>

            </div>

        </div>

    </section>

    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>