<?php
include('../dbcon.php');
include_once '../include/signup.inc.php';
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<link rel="stylesheet" type="text/css" href="css/sign_up.css" />
<main>
  <section class="main-container">
    <div class="left">
      <img src="../PITT/img/student.svg" />
        <svg class="h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 802.02697 590.91632" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>researching</title>
        <rect x="464.90551" y="218.80786" width="337.12145" height="9.8889" fill="#e6e6e6" />
        <rect x="492.77422" y="136.10073" width="85.4041" height="85.4041" fill="#e6e6e6" />
        <rect x="509.85504" y="153.18155" width="51.24246" height="51.24246" fill="#ccc" />
        <rect x="684.2592" y="136.10073" width="21.57577" height="85.4041" fill="#e6e6e6" />
        <rect x="684.2592" y="149.58559" width="21.57577" height="9.8889" fill="#ccc" />
        <rect x="684.2592" y="192.73713" width="21.57577" height="9.8889" fill="#ccc" />
        <rect x="650.99655" y="136.10073" width="21.57577" height="85.4041" fill="#e6e6e6" />
        <rect x="650.99655" y="149.58559" width="21.57577" height="9.8889" fill="#ccc" />
        <rect x="650.99655" y="192.73713" width="21.57577" height="9.8889" fill="#ccc" />
        <rect x="921.90231" y="290.64257" width="21.57577" height="85.4041" transform="translate(-250.05651 293.89202) rotate(-26.3396)" fill="#e6e6e6" />
        <rect x="911.13272" y="306.64743" width="21.57577" height="9.8889" transform="translate(-241.52311 286.85528) rotate(-26.3396)" fill="#ccc" />
        <rect x="930.27866" y="345.31898" width="21.57577" height="9.8889" transform="translate(-256.69359 299.36504) rotate(-26.3396)" fill="#ccc" />
        <polygon points="524.688 170.382 535.554 189.201 546.419 208.02 524.688 208.02 502.958 208.02 513.823 189.201 524.688 170.382" fill="#e6e6e6" />
        <polygon points="543.567 173.978 554.432 192.797 565.298 211.616 543.567 211.616 521.837 211.616 532.702 192.797 543.567 173.978" fill="#e6e6e6" />
        <circle cx="551.2086" cy="162.17145" r="6.29293" fill="#e6e6e6" />
        <rect x="663.89203" y="237.60213" width="337.12145" height="9.8889" transform="translate(1465.91899 330.55131) rotate(-180)" fill="#e6e6e6" />
        <rect x="887.74067" y="154.895" width="85.4041" height="85.4041" transform="translate(1661.89893 240.65226) rotate(-180)" fill="#e6e6e6" />
        <rect x="904.82149" y="171.97582" width="51.24246" height="51.24246" transform="translate(1661.89893 240.65226) rotate(-180)" fill="#ccc" />
        <rect x="760.08402" y="154.895" width="21.57577" height="85.4041" transform="translate(1342.75729 240.65226) rotate(-180)" fill="#e6e6e6" />
        <rect x="760.08402" y="168.37986" width="21.57577" height="9.8889" transform="translate(1342.75729 192.10677) rotate(-180)" fill="#ccc" />
        <rect x="760.08402" y="211.5314" width="21.57577" height="9.8889" transform="translate(1342.75729 278.40986) rotate(-180)" fill="#ccc" />
        <rect x="793.34667" y="154.895" width="21.57577" height="85.4041" transform="translate(1409.28259 240.65226) rotate(-180)" fill="#e6e6e6" />
        <rect x="793.34667" y="168.37986" width="21.57577" height="9.8889" transform="translate(1409.28259 192.10677) rotate(-180)" fill="#ccc" />
        <rect x="793.34667" y="211.5314" width="21.57577" height="9.8889" transform="translate(1409.28259 278.40986) rotate(-180)" fill="#ccc" />
        <rect x="721.42742" y="154.895" width="21.57577" height="85.4041" transform="translate(1101.7535 545.01488) rotate(-153.6604)" fill="#e6e6e6" />
        <rect x="732.19702" y="170.89985" width="21.57577" height="9.8889" transform="translate(1131.82608 508.54612) rotate(-153.6604)" fill="#ccc" />
        <rect x="713.05107" y="209.5714" width="21.57577" height="9.8889" transform="translate(1078.36372 573.37946) rotate(-153.6604)" fill="#ccc" />
        <polygon points="742.244 34.634 731.379 53.453 720.514 72.272 742.244 72.272 763.975 72.272 753.109 53.453 742.244 34.634" fill="#e6e6e6" />
        <polygon points="723.365 38.23 712.5 57.049 701.635 75.868 723.365 75.868 745.096 75.868 734.231 57.049 723.365 38.23" fill="#e6e6e6" />
        <circle cx="715.72387" cy="26.42388" r="6.29293" fill="#e6e6e6" />
        <rect x="663.89203" y="509.09727" width="337.12145" height="9.8889" transform="translate(1465.91899 873.5416) rotate(-180)" fill="#e6e6e6" />
        <rect x="887.74067" y="426.39014" width="85.4041" height="85.4041" transform="translate(1661.89893 783.64254) rotate(-180)" fill="#e6e6e6" />
        <rect x="904.82149" y="443.47096" width="51.24246" height="51.24246" transform="translate(1661.89893 783.64254) rotate(-180)" fill="#ccc" />
        <rect x="760.08402" y="426.39014" width="21.57577" height="85.4041" transform="translate(1342.75729 783.64254) rotate(-180)" fill="#e6e6e6" />
        <rect x="760.08402" y="439.875" width="21.57577" height="9.8889" transform="translate(1342.75729 735.09706) rotate(-180)" fill="#ccc" />
        <rect x="760.08402" y="483.02655" width="21.57577" height="9.8889" transform="translate(1342.75729 821.40015) rotate(-180)" fill="#ccc" />
        <rect x="793.34667" y="426.39014" width="21.57577" height="85.4041" transform="translate(1409.28259 783.64254) rotate(-180)" fill="#e6e6e6" />
        <rect x="793.34667" y="439.875" width="21.57577" height="9.8889" transform="translate(1409.28259 735.09706) rotate(-180)" fill="#ccc" />
        <rect x="793.34667" y="483.02655" width="21.57577" height="9.8889" transform="translate(1409.28259 821.40015) rotate(-180)" fill="#ccc" />
        <rect x="721.42742" y="426.39014" width="21.57577" height="85.4041" transform="translate(981.29362 1059.81853) rotate(-153.6604)" fill="#e6e6e6" />
        <rect x="732.19702" y="442.395" width="21.57577" height="9.8889" transform="translate(1011.3662 1023.34977) rotate(-153.6604)" fill="#ccc" />
        <rect x="713.05107" y="481.06655" width="21.57577" height="9.8889" transform="translate(957.90384 1088.18312) rotate(-153.6604)" fill="#ccc" />
        <polygon points="742.244 306.129 731.379 324.948 720.514 343.768 742.244 343.768 763.975 343.768 753.109 324.948 742.244 306.129" fill="#e6e6e6" />
        <polygon points="723.365 309.725 712.5 328.544 701.635 347.364 723.365 347.364 745.096 347.364 734.231 328.544 723.365 309.725" fill="#e6e6e6" />
        <circle cx="715.72387" cy="297.91903" r="6.29293" fill="#e6e6e6" />
        <ellipse cx="397.12944" cy="562.7111" rx="397.12944" ry="28.20522" fill="#e6e6e6" />
        <path d="M906.37333,733.04786c-64.75515-11.52541-135.56743-9.60949-209.84681,0,33.85544-28.5813,63.07462-57.16255,29.21918-85.74385,66.03927,13.624,75.28918,12.24508,148.75216,0C857.45856,675.88531,889.334,704.46656,906.37333,733.04786Z" transform="translate(-198.98652 -154.54184)" fill="#6c63ff" />
        <path d="M906.37333,733.04786c-64.75515-11.52541-135.56743-9.60949-209.84681,0,33.85544-28.5813,63.07462-57.16255,29.21918-85.74385,66.03927,13.624,75.28918,12.24508,148.75216,0C857.45856,675.88531,889.334,704.46656,906.37333,733.04786Z" transform="translate(-198.98652 -154.54184)" opacity="0.2" />
        <path d="M890.57841,720.85416c-55.00706-9.19982-115.15943-7.6705-178.257,0C741.08036,698.04,765.901,675.22584,737.142,652.41166c56.09788,10.875,63.95533,9.77428,126.35937,0C849.02715,675.22584,876.10416,698.04,890.57841,720.85416Z" transform="translate(-198.98652 -154.54184)" fill="#6c63ff" />
        <circle cx="670.64039" cy="500.24412" r="29.30909" fill="#2f2e41" />
        <polygon points="537.591 466.249 557.899 469.634 568.053 498.967 538.72 517.019 504.873 466.249 536.463 466.249 537.591 466.249" fill="#a0616a" />
        <circle cx="595.13005" cy="463.99285" r="47.38476" fill="#a0616a" />
        <path d="M532.37217,445.91877s-115.07728,12.41029-135.385,10.15388-29.33342-4.51284-29.33342-4.51284-13.53851,18.05134-6.76925,25.9488A48.82193,48.82193,0,0,0,374.423,488.7907s12.41029-3.38463,21.436,0,100.41057,18.05133,116.20549,4.51283S532.37217,445.91877,532.37217,445.91877Z" transform="translate(-198.98652 -154.54184)" fill="#2f2e41" />
        <path d="M540.26963,697.50929s-75.59-21.436-89.12848-116.20549v-9.02567S436.185,598.51641,430.83339,603.868c-6.20515,6.20514-28.20522,62.05147-27.077,67.69251s0,7.89746,0,7.89746l-32.71805-3.38462V665.91945s17.48724-52.4617,18.61545-64.872,43.436-98.71825,43.436-98.71825,15.79492-32.71805,42.87193,0,29.33342,55.28222,29.33342,55.28222l34.97447,67.69252Z" transform="translate(-198.98652 -154.54184)" fill="#2f2e41" />
        <path d="M371.03833,448.17519l-36.10267-12.4103s-33.84626-24.82059-25.9488,0,44.00013,78.9746,54.154,73.33356,22.36551-19.64318,19.64432-21.66778S362.01266,470.73936,371.03833,448.17519Z" transform="translate(-198.98652 -154.54184)" fill="#2f2e41" />
        <path d="M375.4022,659.25875l-29.14381,14.233s-35.24366,5.4221-15.58854,15.58855,73.87615,21.01064,76.5872,11.522,1.63541-25.2364-1.21558-24.81793S383.53535,678.23611,375.4022,659.25875Z" transform="translate(-198.98652 -154.54184)" fill="#2f2e41" />
        <path d="M525.60291,623.04752s-14.66671,63.17969,10.15388,76.71819S734.32151,715.56063,747.86,690.74s6.76926-24.82059,6.76926-24.82059l-36.10268-40.61551L747.86,623.04752s0-9.02567-10.15387-10.15387-41.74372-12.4103-68.82073-4.51284-42.87193-15.79492-42.87193-15.79492Z" transform="translate(-198.98652 -154.54184)" fill="#575a89" />
        <polygon points="307.437 271.069 288.257 375.993 420.258 360.198 443.95 265.428 307.437 271.069" fill="#3f3d56" />
        <polygon points="311.386 275.018 295.591 368.659 415.745 354.557 438.873 269.377 311.386 275.018" fill="#fff" />
        <polygon points="292.77 377.121 288.257 375.993 286.001 380.505 322.104 480.916 325.499 479.618 326.616 473.019 292.77 377.121" fill="#b3b3b3" />
        <polygon points="288.257 374.864 324.36 479.788 460.873 459.48 420.258 360.198 288.257 374.864" fill="#d0cde1" />
        <polygon points="306.309 371.48 306.309 377.121 406.719 365.839 405.591 360.198 306.309 371.48" fill="#3f3d56" />
        <polygon points="308.565 382.762 324.36 426.762 427.027 414.352 408.976 372.608 308.565 382.762" fill="#3f3d56" />
        <path d="M636.16736,599.35514l-3.38463-9.02567s-25.94879-45.12834-39.4873-36.10267,28.20522,53.0258,28.20522,53.0258h13.5385Z" transform="translate(-198.98652 -154.54184)" fill="#a0616a" />
        <path d="M550.4235,606.12439l-3.38462-13.5385s-9.02567-41.74372,6.76925-39.4873,20.30776,41.74372,20.30776,41.74372l-1.12821,9.02567Z" transform="translate(-198.98652 -154.54184)" fill="#a0616a" />
        <path d="M577.50051,600.48335s-29.33342-4.51283-30.46163,2.25642-6.76925,108.308,21.436,111.69265,168.10309,18.05134,153.43638-16.92313-37.23089-30.46163-37.23089-30.46163L588.7826,677.20154Z" transform="translate(-198.98652 -154.54184)" fill="#575a89" />
        <polygon points="467.078 458.916 437.181 438.044 417.437 453.275 442.258 480.352 467.078 458.916" fill="#575a89" />
        <polygon points="386.976 479.224 391.488 522.096 469.335 517.583 401.642 516.455 386.976 479.224" opacity="0.2" />
        <circle cx="618.52064" cy="472.60281" r="56.41043" fill="#2f2e41" />
        <polygon points="328.309 307.736 398.258 305.301 405.027 279.531 332.822 281.71 328.309 307.736" fill="#6c63ff" />
        <polygon points="310.258 322.403 416.309 319.018 417.437 314.505 311.386 318.239 310.258 322.403" fill="#e6e6e6" />
        <polygon points="308.001 333.685 414.053 330.3 415.181 325.787 309.129 329.521 308.001 333.685" fill="#e6e6e6" />
        <polygon points="306.873 342.71 412.924 339.326 414.053 334.813 308.001 338.546 306.873 342.71" fill="#e6e6e6" />
      </svg>
    </div>
    <div class="right">
       <form method="post" enctype="multipart/form-data">
          <h1>Hello, <span style="color: #6c63ff;">Good</span>&nbsp; day!</h1>
            <p class="note"></p>
              <fieldset>
                <legend>Account Confirmation</legend>
                  <div class="half">
                      <div>
                        <label class="control-label" for="inputEmail">Student No:</label>
                        <input type="text" id="inputEmail" name="USER_ID" value="<?php echo isset($USER_ID) ? $USER_ID : ''   ?>" placeholder="SCHOOL ID" required>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <?php if (isset($_POST['submit'])) { ?>
                          <span class="label label-important"><?php echo $exist; ?></span>
                        <?php } ?>
                      </div>
                        <div>
                          <label class="control-label" for="c">Username</label>
                          <input type="text" id="inputEmail" name="USERNAME" value="<?php echo isset($USERNAME) ? $USERNAME : '' ?>" placeholder="Username" required>
                          &nbsp;&nbsp;&nbsp;&nbsp;
                          <?php if (isset($_POST['submit'])) { ?>
                            <span class="label label-important"><?php echo $exist1; ?></span>
                          <?php } ?>
                        </div>
                  </div>
                  <label class="control-label" for="inputPassword">Password</label>
                  <input type="password" id="PASSWORD" name="PASSWORD" value="<?php echo isset($PASSWORD) ? $PASSWORD : '' ?>" placeholder="Password">
                  <label class="control-label" for="inputPassword">Confirm Password</label>
                  <input type="password" name="CPASSWORD" value="<?php echo isset($CPASSWORD) ? $CPASSWORD : '' ?>" placeholder="Confirm Password" required>
                  <?php if (isset($_POST['submit'])) { ?>
                    <span class="label label-important"><?php echo $a; ?></span>
                  <?php } ?>
              </fieldset>
                    <div class="submit-wrapper">
                      <button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Confirm</button>

                      <p>Already have an account? <a href="login_form.php">Sign In</a></p>
                    </div>
         </form>
         <div class="bg"></div>
        <div class="star-field">
        <div class="layer"></div>
        <div class="layer"></div>
        <div class="layer"></div>
      </div>
  </section>
</main>

<style>
    
/* Modal */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100vw; /* Full width */
    height: 100vh; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0 0 0 / 0%); /* Black with transparency */
    justify-content: center; /* Center the modal vertically */
    align-items: center; /* Center the modal horizontally */
    display: flex; /* Enable flexbox layout */
}

/* Modal Content/Box */
.modal-content {
    background-color: #ffffff;
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
    max-width: 600px; /* Limit the maximum width of the modal */
    border-radius: 10px;
}

/* Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

/* Confetti Effect */


.confetti1 {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.emoji {
  display: block;
  text-align: center;
  font-size: 5rem;
  line-height: 5rem;
}

h1 {
  text-align: center;
}

.text-sample {
    text-align: center;
    font-size: 20px;
    font-weight: 200;
    margin: 0;
    line-height: 20px;
}

.modal-btn {
  display: block;
  margin: 0 -2rem -2rem -2rem;
  padding: 1rem 2rem;
  font-size: .75rem;
  text-transform: uppercase;
  text-align: center;
  color: #fff;
  font-weight: 600;
  border-radius: 0 0 .25rem .25rem;
  background-color: var(--green);
  text-decoration: none;
}


#confetti {
  position: absolute;
  top:0;
  left: 0;
  z-index: 1;
  
}
canvas{
    position: relative;

}
#party-info {
  position: absolute;
  background: rgba(255,255,255,1);
  box-shadow: 10px 10px 10px rgba(255,255,255,0.8);
  padding: 20px;
  margin: 0 auto;
  height: 200px;
  margin-top: -100px;
  top: 50%;
  left: 0;
  right: 0;
  bottom:0;
  text-align: center;
  width: 400px;
  z-index: 2;
  color: gray;
}
.navbar{
    z-index: 99999 !important;
}

</style>
<script>
    function Confetti() {
  //canvas init
  var canvas = document.getElementById("confetti");
  var ctx = canvas.getContext("2d");

  //canvas dimensions
  var W = window.innerWidth;
  var H = window.innerHeight;
  canvas.width = W;
  canvas.height = H;
  
  //particles
  var mp = 150; //max particles
  var types = ['circle', 'circle', 'triangle', 'triangle', 'line'];
  var colors = [
    [238, 96, 169],
    [68, 213, 217],
    [245, 187, 152],
    [144, 148, 188],
    [235, 234, 77]
  ];
  var angles = [
    [4,0,4,4],
    [2,2,0,4],
    [0,4,2,2],
    [0,4,4,4]
  ]
  var particles = [];
  for (var i = 0; i < mp; i++) {
    particles.push({
      x: Math.random() * W, //x-coordinate
      y: Math.random() * H, //y-coordinate
      r: Math.random() * 4 + 1, //radius
      d: Math.random() * mp, //density
      l: Math.floor(Math.random()*65+-30), // line angle
      a: angles[Math.floor(Math.random()*angles.length)], // triangle rotation
      c: colors[Math.floor(Math.random()*colors.length)], // color
      t: types[Math.floor(Math.random()*types.length)] //shape 
    })
  }
  
  function draw(){
    ctx.clearRect(0, 0, W, H);
    

    for (var i = 0; i < mp; i++) {
      var p = particles[i];
      var op = (p.r <= 3) ? 0.4 : 0.8;
      
      if (p.t == 'circle'){
        ctx.fillStyle = "rgba(" + p.c + ", "+ op +")";
        ctx.beginPath();
        ctx.moveTo(p.x, p.y);
        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2, true);
        ctx.fill();
      } else if (p.t == 'triangle'){
        ctx.fillStyle = "rgba(" + p.c + ", "+ op +")";
        ctx.beginPath();
        ctx.moveTo(p.x, p.y);
        ctx.lineTo(p.x + (p.r*p.a[0]), p.y + (p.r*p.a[1]));
        ctx.lineTo(p.x + (p.r*p.a[2]), p.y + (p.r*p.a[3]));
        ctx.closePath();
        ctx.fill(); 
      } else if (p.t == 'line') {
        ctx.strokeStyle = "rgba(" + p.c + "," + op +")";
        ctx.beginPath();
        ctx.moveTo(p.x, p.y);
        ctx.lineTo(p.x + p.l, p.y + (p.r * 5));
        ctx.lineWidth = 2;
        ctx.stroke();
      } 

    }
    update();
  }



  function update() {

    for (var i = 0; i < mp; i++) {
      var p = particles[i];
      p.y += Math.cos(p.d) + 1 + p.r / 2;
      p.x += Math.sin(0) * 2;
      
      if (p.x > W + 5 || p.x < -5 || p.y > H) {
        particles[i] = {
          x: Math.random() * W,
          y: -10,
          r: p.r,
          d: p.d,
          l: p.l,
          a: p.a,
          c: p.c,
          t: p.t
        };
      }
    }
  }

  //animation loop
  setInterval(draw, 23);

}

window.onload = function(){
  Confetti();
  
//   window.resizeWindow = function() {
//     Confetti();
//   };

//   window.addEventListener('resize', resizeWindow, false);
}
</script>