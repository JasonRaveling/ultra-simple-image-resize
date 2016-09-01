<!DOCTYPE html>
<html>  

    <head>
        <title>:: Image Resizer ::</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

        <div class="content-wrapper">

            <h1>Image resizer</h1>
            <h3>Instructions</h3> 
            <ol>
                <li>Browse for the file you want to resize.</li>
                <li>Save it to desired folder when prompted.</li>
            </ol>
            
            <div class="form-wrapper">
                <form action="resize.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Resize" name="submit">
                </form>
            </div>
            (Depending on file size and connection speed,this may take a few moments.)
            <br>
            If you are using an apple mobile device, the image will open in the web browser and you will have to save it with a long click.

            <div class="copyright">
                Ultra Simple Image Resize &copy; 2016 under the <a target="_blank" href="https://www.gnu.org/licenses/gpl-3.0.html">GNU General Public License v3.0</a>
                <br>
                This script comes with ABSOLUTELY NO WARRANTY; for details see <a target="_blank" href="https://www.gnu.org/licenses/gpl-3.0.html#section15">the license</a>.
            </div>

        </div> <?php // end content-wrapper ?>

    </body>
</html>

