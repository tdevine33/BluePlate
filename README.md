BluePlate
==========

A Starter WordPress Theme Forked by Terence Devine

I created this Starter Theme to tackle some of the little issues that I seemed to be dealing with for every project, such as base SCSS style sheets, pagination, stripped markup, jQuery and script files linked and the array of WordPress files needed for a proper theme.

## Things to Know

There are a few things you may want to know before starting with this theme, to cut down the number of head scratches along the way!

### Normalize

My CSS reset of choice is normalize.css (scss/normalize.scss) - if you are used to using the popular reset.css, it may throw you off as it doesn't strip ALL styles; but leaves the typical base styles (ie: ul's have additional margin / padding)

### Aria Roles

I use Aria roles as my attribute selectors for the main sections of my site.  You may notice them on, but not limited to:

* header[role=banner] = <header role="banner"></header>
* article[role=main] = <article role="main"></article>
* section[role=main] = <section role="main"></section>
* div[role=main] = <div role="main"></div>
* footer[role=contentinfo] = <footer role="contentinfo"></footer>

### Media Queries

The Following do not take effect until 800 pixels (media queries)

* Grid System
* Hover States