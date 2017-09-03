/*
 * aesop.js
 * by Ryhan Hassan
 * ryhanh@me.com
 *
 * Automagically adds filler content
 * whenever an element has class="aesop".
 * Hope you find it useful :)
 */
var aesop = (
function () {

    var selector;
    var imagePlaceHolder = "http://placehold.it/${w}x${h}&text=${text}";

    if (typeof document.getElementsByClassName != 'function') {
        document.getElementsByClassName = function (cl) {
            var retnode = [];
            var myclass = new RegExp('\\b' + cl + '\\b');
            var elem = this.getElementsByTagName('*');
            for (var i = 0; i < elem.length; i++) {
                var classes = elem[i].className;
                if (myclass.test(classes)) retnode.push(elem[i]);
            }
            return retnode;
        };
    }

    /*
     * Spec
     * Here are some functions you might find useful
     *
     * aesop_handler(element)
     * aesop_handle_elements(elements)
     *
     * aesop_fetchWord();
     * aesop_fetchPhrase();
     * aesop_fetchLine();
     * aesop_fetchParagraph();
     * aesop_fetchParagraphs();
     *
     */


    /*
     * aesop_handler(element)
     *
     * Takes in an element and adds filler content.
     * Returns false if tag is unrecognized.
     */
    function aesop_handler(element) {
        if (!/^\s*$/.test(element.innerHTML)){
            var childs = element.children;
            if(childs.length){
                for(var aesop_i = 0; aesop_i < childs.length; aesop_i++){
                    aesop_handler(childs[aesop_i]);
                }
            }
            return;
        }
        switch (element.nodeName.toLowerCase()) {
        case 'b':
        case 'em':
        case 'strong':
        case 'button':
        case 'th':
        case 'td':
        case 'title':
        case 'tr':
            element.innerHTML = aesop_fetchWord();
            break;

        case 'header':
        case 'cite':
        case 'caption':
        case 'mark':
        case 'q':
        case 's':
        case 'u':
        case 'small':
        case 'span':
        case 'code':
        case 'pre':
        case 'li':
        case 'dt':
        case 'h1':
        case 'h2':
        case 'h3':
        case 'h4':
        case 'h5':
        case 'h6':
            element.innerHTML = aesop_fetchPhrase();
            break;

        case 'footer':
        case 'aside':
        case 'summary':
        case 'blockquote':
            element.innerHTML = aesop_fetchParagraph();
            break;

        case 'p':
            element.innerHTML = aesop_fetchVerse();
            break;


        case 'article':
        case 'section':
            element.innerHTML = aesop_fetchParagraphs()
            break;

            /* Special cases */
        case 'a':
            element.href = "http://ryhan.me/";
            element.innerHTML = "www." + aesop_fetchWord() + aesop_capitalize(aesop_fetchWord()) + ".com";
            break;

        case 'img':
            var src = element.getAttribute('src') || element.src;
            var temp = element.getAttribute('aesop-temp-img');
            if(src == "" || src == null || temp == true || temp == "true"){
                var width = element.getAttribute('width') || element.width || (element.width = 250);
                var height = element.getAttribute('height') || element.height || (element.height = 100);
                var title = element.getAttribute('title') || '';
                element.src = imagePlaceHolder.replace('${w}', width).replace('${h}', height).replace('${text}', title);
                element.setAttribute('aesop-temp-img', true);
            }
            break;

        case 'ol':
        case 'ul':
            element.innerHTML = aesop_fetchList();
            break;

        case 'dl':
            element.innerHTML = aesop_fetchDefinitionList();
            break;

        case 'hr':
            break;

        default:
            element.innerHTML = aesop_fetchLine();
        }
    }

    // Handle an array of elements
    function aesop_handle_elements(elements){
        for (var i = 0; i < elements.length; i++) {
            aesop_handler(elements[i]);
        }
    }


    // Begin generator
    // PB: Going to start with lines, move to verses for paragraphs later

    // PB: Going to need to bring back word library too for a, td etc.
    // e.g. sucker, waders, heavens


    /////////////////////////////////////////////////

    // +++ WORDS

    /////////////////////////////////////////////////

    var aesop_wordlibrary = [
    "flavors",
    "waders",
    "naysayers",
    "sucker",
    "brim",
    "console",
    "donuts",
    "experiment",
    "earthly",
    "thump",
    "brain",
    "melody",
    "outside"];


    /////////////////////////////////////////////////

    // +++ LINES

    /////////////////////////////////////////////////


    var aesop_linelibrary = [
    "Is a love such as that which I exhibit for my practice",
    "Let a sucker drift, I lift up every stone prone to find",
    "And a scent, your riddles yield a little plastic blend",
    "Once my breath is dispersed, My God, you think the heavens touched the earth",
    "Ease back; let a heart thump echo normalcy for 10",
    "Let the back burner boiling point descend",
    "Sit and sweat bullets on a console",
    "Outside the most ridiculous poison tongue brain silo",
    "Dead before the chubby debutante conquered the high note",
    "Ok, I lay me down to sleep, creepin' a slumber under red skies",
    "Therefore it is and the melody settles"];


    /////////////////////////////////////////////////

    // +++ VERSES

    /////////////////////////////////////////////////


    var aesop_verselibrary = [
    "Ok, I lay me down to sleep, creepin' a slumber under red skies, heads splittin', straight sippin' a drip of dead vibes, It's red tides from here, stop and smell analog hell, Clenchin' a stench of burnin' logics and a child with yearning optics",

    "Billy-goat beard twenty years in the making, Carried lures in his brim, carried beer in his waders, stinked like alcohol of all prominent flavors, carried knives in his vest, carried war in his nature, sat among the forest floor critters and pine cones, could tie a perfect fly with his eyes closed, Veteran angler with a mission to run, Make all naysayers hold t-t-t-tongues",

    "Ease back; let a heart thump echo normalcy for 10, let the back burner boiling point descend, I race the derby in the first heat (strike personal) Strike personal space with the most utterly putrid version of grace",

    "Busting accidental dirt bike donuts, outside the most ridiculous poison tongue brain silo, dead before the chubby debutante conquered the high note, schooled by the cruel intention inventions pensive sideshow",

    "Earth to AR vertical burden has increased at an alarming rate, bliss is down a point, murder up, glee down and still falling, still crawling out of bed at 2 on Saturdays, came this blind soldier-burning confessional"



];


    function aesop_capitalize(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    ///// ===================================
    ///// ++ Load up the words you need here

    function aesop_fetchWord() {
        return aesop_wordlibrary[constrain(0, aesop_wordlibrary.length - 1 )];
    }

    function aesop_fetchLineWords() {
        return aesop_linelibrary[constrain(0, aesop_linelibrary.length - 1 )];
    }

  function aesop_fetchVerseWords() {
        return aesop_verselibrary[constrain(0, aesop_verselibrary.length - 1 )];
    }

     ///// ===================================

    function constrain(min, max){
         return Math.round(Math.random() * (max - min) + min);
    }

    function aesop_fetch(min, max, func, join) {
        join || (join = ' ');
        var aesop_length = constrain(min, max);
        var result = [];
        for (var aesop_i = 0; aesop_i < aesop_length; aesop_i++) {
            result.push(func());
        }
        return aesop_capitalize(result.join(join));
    }

    function fetch_suroundWithTag(min, max, func, tagName) {
        var startTag = '<' + tagName + '>';
        var endTag = '</' + tagName + '>';
        return startTag + aesop_fetch(min, max, func, endTag + startTag) + endTag;
    }


    ///// ===================================
    ///// ++ Get what you need here

     function aesop_fetchLine() {
        return aesop_fetch(1, 1, aesop_fetchLineWords) + '.';
    }


    function aesop_fetchPhrase() {
        //return aesop_fetch(3, 5, aesop_fetchWord);

        // short one liners for header / small elemnents
        return aesop_fetch(1, 1, aesop_fetchLine);
    }

    function aesop_fetchVerse() {
        //return aesop_fetch(3, 5, aesop_fetchWord);

        // short one liners for header / small elemnents
        return aesop_fetch(1, 1, aesop_fetchVerseWords);
    }



    function aesop_fetchParagraph() {
        return aesop_fetch(1, 1, aesop_fetchLine);
    }

    function aesop_fetchParagraphs() {
        return fetch_suroundWithTag(3, 7, aesop_fetchVerse, 'p');
    }

    function aesop_fetchList() {
        return fetch_suroundWithTag(4, 8, aesop_fetchPhrase, 'li');
    }

    function aesop_fetchDefinitionList() {
        var html = ''
        for (var i = 0, l = constrain(3,5); i < l; i++) {
            html += fetch_suroundWithTag(1, 1, aesop_fetchPhrase, 'dt') + fetch_suroundWithTag(1, 1, aesop_fetchPhrase, 'dd');
        }
        console.log(html)
        return html;
    }


     ///// ===================================


    // Handle all elements with class 'aesop'
    aesop_handle_elements(document.getElementsByClassName('aesop'));

    // Handle elements which match give css selectors


    function init_str(selector_str) {
        if (!document.querySelectorAll) {
            return false;
        }
        try {
            aesop_handle_elements(document.querySelectorAll(selector_str));
            return true;
        }
        catch (err) {
            return false;
        }
    }

    return {
        /* returns true if successful, false otherwise */
        'init': function() {
            if (selector) {
                init_str(selector);
            } else {
                aesop_handle_elements(document.getElementsByClassName('aesop'));
            }
        },
        'setImagePlaceholder': function(pl) {
            imagePlaceHolder = pl;
            return this;
        },
        'setSelector': function(sl){
            if (typeof sl === "object") {
                selector = sl.join(",");
            } else if (sl){
                selector = sl;
            }
            return this;
        }
    };

})();
