# Facebook-Messenger-Chatbot
Facebook Messenger Chatbot tutorial

## What is Chatbot ? 
A chatbot is a computer program which conducts a conversation via auditory or textual methods. Such programs are often designed to convincingly simulate how a human would behave as a conversational partner, thereby passing the Turing test

><br />  This chatbot is for `Facebook Messenger`
<br /> ![chatbot](/FacebookChatBot/Chatbot.jpg)

## Setup 
<br /> Go to `developers.facebook.com`
<br /> Login with fb account & create an app id
<br /> Go to App
<br /> Go to Add Products ->Messenger 
<br /> In `Messenger` -> go to webhooks

## Setup Heroku Account 
<br /> It will be used in Callback Url of messenger webhook
<br /> SignUp/login
<br /> Create app
<br /> The only purpose for Heroku is that it just provides us a platform to push my code and this would be my webhook in messenger webhook seting. Otherwise , if you have `https://` website, you dont need heroku. 
<br /> Now install herolu-cli
<br /> `sudo npm install heroku-cli -g`
<br /> Open a terminal and type : `heroku login`
<br /> Enter your credentials and login
<br /> type : `git init`
<br /> type : `touch index.php`
<br /> type :`git add .`
<br /> type : `git commit -m "First Commit" `
<br /> type : `heroku git:remote -a nameless-peak-18519` : This will make a git repo
<br /> type : `git push heroku master`
<br /> Open the app in `Heroku` . Copy the Url of app & Paste the url in `Callback Url` of messenger.
<br /> Now generate Token in Facebook by selecting the page
<br /> In webhook , select the same page and subscribe it

## Install php-curl
<br /> `sudo apt-get install php7.0-curl`
<br /> `sudo service apache2 restart`

## Set Up ngrok
<br /> Download ngrok from https://ngrok.com/
<br > Go to the downloaded folder & Type : `./ngrok http 80`
<br /> Now make an index.php and paste it `/var/www/html/` . Code is in repo 
<br /> Now paste this `URL` generated by `ngrok` into `Messenger CallbackUrl` 
<br /> Generate Page Access Token and subcribe to that same page

## First Reply
<br /> Now after setting this much open `facebook.com/page_on_which_it_was_subscribed`
<br /> Message something and a reply will come 
<br />
