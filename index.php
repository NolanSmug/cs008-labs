<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Nolan's CS008 Website</title>
        <meta name="author" content="Nolan Cyr">
        <meta name="description" content="A site map to all of my assignments for CS 008">
        <style>
           body{
                margin: auto;
                padding: 3%;
                width: 90%;
            }

            figure {
                border: thin solid darkslategray;
                border-radius: 3%;
                padding: 3%;
                text-align: center;
            }

            figcaption {
                color: #839e99;
                font-style: italic;
                text-align: center;
            }

            img{
                border-radius: 3%;
                max-width: 100%
            }

            .right{
                float: right;
                margin-left: 3%;
            }

            .small {
                width: 20%;
            }
            
            .header{
                grid-area: header;
                grid-column: 1 / 3;
                padding: .5%;
                margin: .5%;
            }  
            .public-files{
                grid-area: public-files;
                padding: .5%;
                margin: .5%;
            }

            .supporting-files{
                grid-area: supporting-files;
                padding: .5%;
                margin: .5%;
            }
            .grader-notes{
                grid-area: grader-notes;
                padding: .5%;
                margin: .5%;
            }
            .grid-layout{
                border-bottom: thin dashed navy;
                display: inline-grid;
                grid-template-columns: 25% 25% 50%;
                grid-template-areas: "header header header"
                    "public-files supporting-files grader-notes"; 
                padding: .5%;
                margin: .5%;
                width: 100%;    
            }
        </style>
    </head>

    <body>
        <figure class="right small">
            <img alt="Nolan Cyr circa 2022" src="image/nolan-cyr.png">
            <figcaption>Walking around Roosevelt Island in NYC</figcaption>
        </figure>

        <h1>CS 008-<em>A</em> Fall 2022</h1>
        <h2>Nolan Cyr - Site map</h2>
        <p><a href="ADMIN/admin.php">My Admin Folder</a></p>
 
<!----------------------------Lab 6------------------------------------>  
        <section class="grid-layout">
            <h2 class="header">Lab Six - Responsive Design.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab6/detail.php">detail.php</a></p> 
                <p><a href="lab6/form.php">form.php</a></p>
                <p><a href="lab6/index.php">index.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab6/css/custom.css">custom.css</a> </p>
                <p><a href="lab6/css/custom-phone.css">custom-phone.css</a> </p>
                <p><a href="lab6/css/custom-tablet.css">custom-tablet.css</a> </p>
                
                <p><a href="lab6/image/desktop-wireframe.png">wireframe desktop</a></p>
                <p><a href="lab6/image/phone-wireframe.png">wireframe phone</a></p>
                <p><a href="lab6/image/desktop-wireframe.png">wireframe tablet</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p>I used the same wireframe for desktop and tablet.</p>
            </section>
        </section>
<!----------------------------Lab 6------------------------------------>  

<!----------------------------Lab 5------------------------------------>        
        <section class="grid-layout">
            <h2 class="header">Lab Five - Adding more style.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab5/detail.php">detail.php</a></p> 
                <p><a href="lab5/form.php">form.php</a></p>
                <p><a href="lab5/index.php">index.php</a> </p>
            </section>
            
            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab5/css/custom.css">custom.css</a> </p>
                <p><a href="lab5/image/wireframe.png">wireframe.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
<!----------------------------Lab 5------------------------------------>

<!----------------------------Lab 4------------------------------------>
        <section class="grid-layout">
            <h2 class="header">Lab Four- Basic CSS</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab4/detail.php">detail.php</a></p> 
		        <p><a href="lab4/form.php">form.php</a></p> 
		        <p><a href="lab4/index.php">index.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab4/css/custom.css">custom.css</a> </p>
                <p><a href="lab4/image/wireframe.png">wireframe.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
<!----------------------------Lab 4------------------------------------>

<!----------------------------Lab 3------------------------------------>
        <section class="grid-layout">
            <h2 class="header">Lab Three - Adding detail and a form.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab3/detail.php">detail.php</a></p> 
		        <p><a href="lab3/form.php">form.php</a></p> 
		        <p><a href="lab3/index.php">index.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab3/css/custom.css">custom.css</a> </p>
                <p><a href="lab3/image/wireframe.png">wireframe.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
<!----------------------------Lab 3------------------------------------>

<!----------------------------Lab 2------------------------------------>
        <section class="grid-layout">
            <h2 class="header">Lab Two - Choosing your topic.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab2/index.php">index.php</a></p>      
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
            </section>
        </section>
<!----------------------------Lab 2------------------------------------>

<!----------------------------Lab 1------------------------------------>
        <section class="grid-layout">
            <h2>Lab one - Setting up your sitemap</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="test.php">Testing Page</a></p>
            </section>
        </section>
<!----------------------------Lab 1------------------------------------>

    </body>
</html>
