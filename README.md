gs-markdown
===========

GetSimple CMS Markdown Plugin - a plugin to enable use of Markdown and Markdown Extra in GetSimple CMS.

[GetSimple CMS][gs] is a very simple, but powerful CMS. Targeted towards smaller sites (1 - 15 pages), it is also extensible with plugins to be useful as a blogging system as well.

[gs]: http://get-simple.conf/ "Get Simple"

[Markdown][md] and [Mardown Extra][mde] allows you to write using an easy-to-read, easy-to-write plain text format, then convert it to structurally valid XHTML (or HTML). Markdown was developed to be a human-readable syntax, suitable for plain-text emails. It is used by many applications, including github, stack overflow, and reddit. It is also offered as an option in many other programs. 

[md]: http://daringfireball.net/projects/markdown/ "Daring Fireball Markdown"
[php-md]: http://michelf.ca/projects/php-markdown/ "PHP Markdown"
[mde]: http://michelf.ca/projects/php-markdown/extra/ "Markdown Extra"

Integrating Markdown into GetSimple was proven to be rather easy, done with two lines of code by [Zegnat](http://get-simple.info/forum/topic/592/markdown-for-getsimple/).

Installation
============

Installation is similiar to any other plugin. Simple upload the gs-markdown.php and the gs-markdown folder into the plugins folder of your GetSimple CMS installation.

Now, when you edit a page, you will have to click on the Source button in ckeditor in able to directly enter plain text/markdown text. There is an issue that if you edit the page again, most of your line breaks will be missing. 

If you disable ckeditor (Admin -> Settings -> Disable HTML Editor), then all edits will be in markdown and formatting will be preserved.

Future Plans
============

1. Add Markdown Extra
2. Make Plugin configurable
3. Switch between HTML editor on a per-page basis, preferrably on the editor page. (Could be a simple js link).
4. [Implement Markitup Editor](http://markitup.jaysalvat.com/examples/markdown/) 
 



