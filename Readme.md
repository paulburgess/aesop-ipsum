# Aesop Ipsum

<img src="http://farm3.staticflickr.com/2210/2230759958_c4b930b05b.jpg" />

### Why use this?
text here


## Instructions

### Step 1 - Add aesop.js 

Add `<script type="text/javascript" src="fixie.js"></script>` to the bottom of your html document, right before your closing `</body>` tag.

### Step 2 - Add the `fixie` class.

Wherever you need filler content, set `class="fixie"`.

For example, if you wanted one filler paragraph, you could use
`<p class="fixie"></p>`

### Step 2 - Alternatively use `fixie.init`

Select where you want filler content using CSS selectors.

Call
```
fixie.init([".array", "#of > .selectors", ".that", ".should", "#be > .populated", ".with", ".lorem"]) 
```
or 
```
fixie.init(".string, #of > .comma, .separated, .selectors, .that, .should, #be > .populated, .with, .lorem")
```
in the JavaScript console or within a `<script>` tag.

You can call Fixie on all empty elements on a page by calling:
```
fixie.init(':empty')
```

## Supported Elements
Fixie inserts the right type of content based on the tag name. Here are some major types you should be aware of:

- `<h1 class="fixie"></h1>` - Adds a few words of text. Same goes for `h2 - h6`
- `<p class="fixie"></p>` - Adds a paragraph of text.
- `<article class="fixie"></article>` - Adds several paragraphs of text.
- `<section class="fixie"></section>` - Adds several paragraphs of text.
- `<img class="fixie"></img>` - Adds an image which displays the width and height of the image.
- `<a class="fixie"></a>` - Adds a randomly named link.

## Tips

### Change the default image placeholder service
Use `fixie.setImagePlaceholder(source)`.

For example, to pull images from Flickr using http://flickholdr.com/, call
```
fixie.setImagePlaceholder('http://flickholdr.com/${w}/${h}/canon').init();
```

### Add class fixie to containers
Fixxie will act on all child elements, but will never 
overwrite content within an element.

Consider the following example:
```
<div class="fixie">
<p>Hello <a></a></p>
</div>
```
Fixie will preserve the "Hello" text, but will
automatically add content to the link.


### Flagging filler content
When you start adding real copy to your page, try adding the following CSS to your stylesheet:

`.fixie{ border:4px solid red; }`

This CSS will highlight all of your dummy content, making it easier to make sure you didn't miss anything.

## License

The MIT License

Copyright (c) 2012 Ryhan Hassan

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

