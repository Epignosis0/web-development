
<!doctype>
<html>
<script type="text/javascript">
function DownloadAndRedirect()
{
   var DownloadURL = "posts_images/lenovo-desktop-computer-500x500.jpg";
   var RedirectURL = "index.php";
   var RedirectPauseSeconds = 0.01;
   location.href = DownloadURL;
   setTimeout("DoTheRedirect('"+RedirectURL+"')",parseInt(RedirectPauseSeconds*1000));
}
function DoTheRedirect(url) { window.location=url; }
</script>
<a href="javascript:DownloadAndRedirect()">
Click to download
</a>

</html>
