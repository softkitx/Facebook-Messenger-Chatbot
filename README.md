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

## 
<br /> 

