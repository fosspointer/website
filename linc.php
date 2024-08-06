<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/x-icon" href="/img/logo.svg" />
    <title>fosspointer</title>
</head>
<body>
    <div id="layout">
        <div id="header">
            <div id="text">
                <a href="/" class="nolink"><h1>foss<span>pointer</span></h1></a>
                <h4 id="show">free software developer</h4>
            </div>
            <a id="icon" href="/"><img src="./img/logo.svg" /></a>
        </div>
        <div id="nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/linc" class="selected">Linc</a></li>
                <li><a href="/linc-docs" target="_blank" class="external">Linc Docs</a></li>
                <li><a href="https://github.com/fosspointer" target="_blank" class="external">GitHub</a></li>
            </ul>
        </div>
        <div id="content">
            <h2>Linc Programming Language: Linc Is Not C</h2>
            <p>
                <a style="margin:0; padding:0;" href="https://github.com/fosspointer/linc">Linc</a>
                is a system-level programming language inspired by C, with the ultimate goal of replacing its
                usage as the principal choice for general-purpose programming. It offers immutability be default and
                supports the developent of not only functioal codebases, but object-oriented and procedural as well.
                It provides new and innovative code structures, such that abstraction of basic logic can be achived
                with great efficiency. Furthermore, it prevents "hidden" convertions, with the purpose of maximizing
                understandability of the logic progression of the code, without any uncertainties or ambiguities.
                A type-system is provided, ensuring that the usage of each and every value is respected, along with
                avoiding possible logical errors. Last but not least, it is structured in free-form, not forcing the
                developer to abide by strict indendation rules. In other words, they are free to develop their own
                convention, or follow already established ones in other languages (for example, in C, C++ and Rust).
            </p>
            <h3>Note: <a href="/linc-docs">documentation for the Linc compiler is available here.</a></h3>
            <h2>Features:</h2>
            <ul>
                <li><p><strong>Statically typed:</strong> Linc's static typing ensures that every value's purpose is respected, such that it be used accordingly.</p></li>
                <li><p><strong>Multi-paradigm:</strong> It is a priority that the language support multiple coding-paradigms, in order to appeal to not only Functional programming audiences, but also Object Oriented and Procedural ones.</p></li>
                <li><p><strong>Free form:</strong> Like most languages, indentation in Linc is insignificant. This means that one can indent their code according to their personal style.</p></li>
                <li><p><strong>Expressive:</strong> A problem with many low-level languages is the lack of expressiveness. This is understandable, due to a focus on performance and compile-time efficiency, deeming them top priorities. In Linc, the language is designed to maximize expression, after which performance is taken into account in the implementation.</p></li>
                <li><p><strong>Immutability by default:</strong> In the majority of modern programming languages, a variable is declared mutable unless stated otherwise (most commonly achieved using the 'const' keyword). In linc, as well as a few other functional-inspired programming languages (such as Rust), the opposite is true. This serves the purpose of easing-up const-correctness (it's much more difficult to specify const, when most of the time it makes sense as the default, rather 'opting-in' for mutability on a case-by-case basis).</p></li>
                <li><p><strong>Evaluator/Interpreter:</strong> Although the language is far from 'complete' (which it most probably won't ever be, but will be kept in maintainance), one can already experiment with complete language features and the language in general, even with codegen support being experimental.</p></li>
            </ul>
        </div>
        <div id="footer">
            <ul id="contact-list">
                <li><a href="https://github.com/fosspointer">GitHub</a></li>
                <li><a href="http://discordapp.com/users/1052728873944617062">Discord</a></li>
                <li><a href="mailto:contact@fosspointer.com">E-mail</a></li>
            </ul>
            <h2>&copy; Copyright 2024</h2>
        </div>
    </div>
</body>
</html>