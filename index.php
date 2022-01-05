<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lydia Eck Work</title>
    <link rel="stylesheet" href="https://use.typekit.net/tbt8qmk.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="stylesheets.css" />


  </head>
  <body>
<img src="work.png" id="work" />

    <!--
    <img src="grid3.png" id="img" />
        <img src="gridwhite.png" id="img2" /> -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-9">
                    <h1>Beautify<br/>your<br/>web</h1>

          <div class="top mainbody">
          <p id="top" style="margin:0;padding:0;">My name is Lydia Virginia Eck, and I love to make websites. When I
            was ten, I was intrigued by the idea of people connecting to each
            other in a way that transcended space and time. Now, awesomely
            enough, facilitating that communication (in an exciting way!) is my job!
          </p>
        </div>
        </div>
        <div class="col-1"></div>
      </div>

      <div class="row">

<div class="col-2"></div>
      <div class="col-8">


<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Who I Am</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Experience</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">My name is Lydia Eck, and I'm from Somerset, New Jersey. I attended Rutgers University, which is where I earned a degree in both Visual Arts and Information Technology. One thing I love to do is to make a nice webpage.</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">I have a fair amount of experience as a designer. I worked for five years at the publication <em>City & State NY</em> and New York Nonprofit Media. I also worked for Rutgers for a time. Are you interested in what I've done?<br/><hr />
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
View ZHC Website
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Zarephath Health Center</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="zhc.png" alt="Zarephath Health Center" style="width:100%; margin-bottom: 1em" /><br />
        I created a website for a nonprofit health center in Somerset, New Jersey. You can view it at <a href="http://www.zhcenter.org">www.zhcenter.org</a>.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
View NASA Website
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NASA Website</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="NASA2.png" alt="NASA" style="width:100%; margin-bottom: 1em" /><br />
        I created a website designed for NASA. It's very simple, but it demonstrates the aesthetic I'm going for. Visit it at <a href="http://www.lydiaeck.work/NASA">lydiaeck.work/NASA</a>.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


  
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">If you want to contact me so that I can build you a page, email me at lydia.v.eck@gmail.com!</div>
</div>



      </div>
<div class="col-2"></div>
      </div>
      <div class="row">
        <a href="#top" id="getto">Go to top</a></div>
        <script>
          $("a[href='#top']").click(function () {
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
          });
        </script>
      </div>
    </div>
  </body>
</html>
