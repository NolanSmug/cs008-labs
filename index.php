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
            
            /* Setting up a grid layout for the main inded page */
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
