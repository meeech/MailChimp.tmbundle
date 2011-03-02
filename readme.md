Mailchimp Textmate Bundle
=========================

o-o-a-a.
--------

Initial list of functionality we are looking to implement, plus some related notes.

Focus is on Campaigns initially, then fill in template stuff after

(x is rough done)

Commands
--------
* Campaign
  * x List all Campaigns & Switch from menu
  * x campaignContent (get)
  * x Upload HTML or Text: Allows uploading of text.txt or html.html file. 
    * (known limitation: html only works for pushing to campaign that did import. templates need some work)
  * x Zip Project and Upload
    * Create a new folder/project. Work as normal. When ready, use this command to push all assets up.
    * This command will IGNORE a folder called \_local if you have one in your project.   
      This is a good place to keep notes, assets, etc that relate to the project, but don't   
      get uploaded
  * Render Campaign Text 
    * x remote - archive version
  * Render Campaign HTML
    * x remote - archive version
    * (local will work provided user fills in mock: http://kb.mailchimp.com/article/merge-tag-cheatsheet-for-campaigns)
  * x Merge Tags Menu (from list) Insertion
  * Merge Tag Cheat Sheet?
  * x Info on current campaign
  
* Templates (needs some more information re: direction for templates)
  * x List all Templates ( Template: Source / Preview  )
  * addnew / update (push + pull)
    * incorporate uploading static assets elsewhere 
    (createCampaign seems you can set content as archive - 
    so, there should be a way to do that via update)
  * x Preview HTML
  
  
* Helpers (transformers, previews)
  * x generateText : generate a text version of HTML document you are currently in. Opens in a new window
  * x inlinecss : Will take the document you are working on, pass it through MailChimp's inlineCSSer, and replace the text. You can actually work in steps with this, writing just the styles you need, and then triggering. to build up the inline. (make video to make this clearer)
  * x ping - make sure chimp is alive!

Getting Started
---------------

* make a new folder for your project. create a file, **mc.ini** inside that folder
* inside **mc.ini** add the line: api_key="Your_API_Key_Here_Ok-us2"
* drag folder onto Textmate to make a new project
* Campaign: Select will allow you switch between campaigns
* Campaign: Get will download the .html + .txt

Things you should know
----------------------

* Macros: In general, tried to keep the pieces of the bundle fairly tight - small responsibilities
  This will allow you (the user) to setup commands which meet your workflow needs more precisely
  For example, see the Upload and Preview macro included with this bundle.
* If you have a folder called **\_local** the bundle will ignore it by default
  This gives you a place to store notes, assets and whatnot as you work. 


Followup
--------

get feedback from chimp inhouse / top theme people what pain points they have?


Targets
-------

Textmate/OSX/php5.2  
  
IDEAS
-----

* snippets for template dev (is there a bundle already we can integrate with?)
* mailchimp tm language file - http://mailchimp.com/features/template-language/
