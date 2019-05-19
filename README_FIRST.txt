##before using these files in your local machine or any other deployment environment, make sure of the following

#.htaccess file in the public folder should have your own RewriteBase..
#for example, if you use localhost and your root folder is gamecompany, then the .htaccess file should look like:
<IfModule mod_rewrite.c>
  Options -Multiviews
  RewriteEngine On
  RewriteBase /gamecompany/public
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
</IfModule>


#if you use some other deployment website, then RewriteBase should look like : /subdomain.domain.com/public
#make user no extra spaces or lines blank lines are entered




#next, make changes to the config.php file in the app/config folder
#if you are using localhost and your root folder is gamecompany, then URLROOT should be set to:
define ("URLROOT","http://localhost/gamecompany");

#if you are deploying to a website, then URLROOT should be:
define ("URLROOT", "http://subdomain.domain.com");



#lastly, there is a payment.js javascript file in the public/javascripts folder that calls directly to a .php file in another folder
#make sure the url is updated accordingly
#if you are using localhost and your root folder is gamecompany, then the referenced url should be
$.ajax({
                type:'POST',
                url:'localhost/gamecompany/Membership/paymentprocess',
                dataType: "json",
                data:formData,
                beforeSend: function(){
                    $("#cardSubmitBtn").prop('disabled', true);
                    $("#cardSubmitBtn").val('Processing....');
                },

#and if you are deploying to some other website with the subdomain gamecompany and the domain being azurewebsites then:
$.ajax({
                type:'POST',
                url:'http://gamecompany.azurewebsites.net/Membership/paymentprocess',
                dataType: "json",
                data:formData,
                beforeSend: function(){
                    $("#cardSubmitBtn").prop('disabled', true);
                    $("#cardSubmitBtn").val('Processing....');
                },
