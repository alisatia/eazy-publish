<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Guidelines</title>
</head>
<body>

<div class="container">
    <div class="blank-1"></div>
    <div class="blank-2"></div>
    <div class="blank-3"></div>
    <div class="blank-4"></div>
    <div class="guidelines">
        <div class="tombol">
            <div class="item-tombol">
                <div class="logo"></div>
                <div onmouseover="structure(this)" onmouseout="structure(this)" id="strr" onclick="structure()" class="structure">Structure</div>
                <div onmouseover="word(this)" onmouseout="word(this)" id="worr" onclick="word()" class="word-limits">Word Limits</div>
                <div onmouseover="guidelines(this)" onmouseout="guidelines(this)" id="guii" onclick="guidelines()" class="style-guidelines">Style Guidelines</div>
                <div onmouseover="formating(this)" onmouseout="formating(this)" id="forr" onclick="formating()" class="formating">Formating and Templates</div>
                <div onmouseover="processing(this)" onmouseout="processing(this)" id="proo" onclick="processing()" class="processing">Processing Time</div>
                <div onmouseover="price(this)" onmouseout="price(this)" id="prii" onclick="price()" class="price">Price Estimation</div>
            </div>
        </div>
        <div class="isi">
            <h2 class="h1">The Guidelines for Printing Book with ISBN</h2>
            <div class="isi-isi">
                <div id="structure" class="str">
                    <h3>Structure</h3><br>
                    <p>Your paper should be compiled in the following order:</p><br>
                    <li>title page;</li><li>abstract;</li><li>keywords;</li><li>main text introduction, materials and methods, results, discussion;</li><li>acknowledgments;</li><li>declaration of interest statement;</li><li>references;</li>
                    <li>appendices (as appropriate);</li><li>table(s) with caption(s) (on individual pages);</li><li>figures;</li><li>figure captions (as a list).</li>
                </div>
                <div id="word" class="wrd">
                    <h3>Word Limits</h3><br>
                    <p>Please include a word count for your paper. A typical paper for this journal should be no more than 7500 words, inclusive of:</p><br>
                    <li>Abstract</li><li>Tables</li><li>References</li><li>Figure or table captions</li>
                </div>
                <div id="guidelines" class="gui">
                    <h3>Style Guidelines</h3><br>
                    <p>Please refer to these quick style guidelines when preparing your paper, rather than any published articles or a sample copy.</p>
                    <p>Please use British (-ize) spelling style consistently throughout your manuscript.</p>
                    <p>Please use single quotation marks, except where ‘a quotation is “within” a quotation’.</p>
                    <p>Please note that long quotations should be indented without quotation marks.</p>
                </div>
                <div id="formating" class="fom">
                    <h3>Formatting and Templates</h3><br>
                    <p>Papers may be submitted in Word or LaTeX formats. Please do not submit your paper as a PDF. Figures should be saved separately from the text. To assist you in preparing your paper, we provide formatting template(s).</p>
                    <p>Word templates are available for this journal. Please save the template to your hard drive, ready for use.</p>
                    <p>A LaTeX template is available for this journal. Please save the LaTeX template to your hard drive and open it, ready for use, by clicking on the icon in Windows Explorer. If you are not able to use the template via the links (or if you have any other template queries) please contact us here.</p>
                </div>
                <div id="processing" class="proc">
                    <h3>Processing Time</h3><br>    
                    <p>processing time</p>
                </div>
                <div id="price" class="pric">
                    <h3>Price Estimation</h3><br>
                    <p>To check the book price click <a href="../cekharga">here</a>.</p>
                </div>
            </div>
                <?php
                    if(isset($_GET['yes'])) { ?>
                    <div class="pilih">
                        <a class="pilih-no" href="../user/dasboard/">Tolak</a>
                        <a class="pilih-yes" href="../upload/index.php?sip">Setuju</a>
                    </div>
                <?php } else { ?>
                <?php } ?>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>