<?php
$title = "Linc";
$current_view = __FILE__;
include 'header.php';
?>
<div id="content">
    <p><sup><i>For the Linc docs, click <a href="/linc-docs/index.html">here</a></i></sup></p>
    <p><a href="https://github.com/fosspointer/linc">Linc</a> (pronounced /lɪŋk/, short for 'Linc Is Not C') is a general-purpose programming language inspired by C. It offers a <strong>dynamic</strong> experience to writing code, as well as serving as a more consistent and uniform tool, while avoiding the accumulated technical debt of languages such as C and C++. Though a work-in-progress, the featureful lincenv REPL, as well as the <a href="https://marketplace.visualstudio.com/items?itemName=fosspointer.linc">Linc VSCode extension</a> make writing Linc code feel easy.</p>
    <p>Linc was designed to be:</p>
    <ul class="vertical list">
        <li><strong>Expressive</strong>: Linc aims to offer expressivity, via syntactic ease of use, as well as useful features that are not typically seen in most programming languages, either as a deliberate choice to maintain a language's direction, or just because expressivity is not focused.</li>
        <li><strong>Modern</strong>: Linc is focused on the future, rather than maintaining habits and familiarity, or features that are "mainstream". The syntax and the "feel" of the language attempt to reflect that. This means that the language may change if there is a need for it to do so. Users should expect to adapt to such changes, especially during early development.</li>
        <li><strong>Library neutral</strong>: The core language has zero dependencies on the standard library, allowing the complete separation of the two. For this, no name or identifier is given special treatment, so as not to impose coding preferences on the user. This restriction even includes 'main' serving as the entry point identifier. Instead, operators are heavily relied on.</li>
        <li><strong>Statically typed</strong>: Typing is static and does not rely on runtime information, so malformed code due to incorrect typing assumptions does not result in crashes or exceptions thrown. Instead, an error is reported during language analysis, before the program ever executes.</li>
        <li><strong></strong></li>
    </ul>
    <p>Linc has been written in C++23 using CMake, and is entirely self-contained, relying solely on the C and C++ standard libraries. This helps streamline but also simplify the development process. However, one important goal of Linc for the future is to reimplement it in itself, which is called self-hosting.</p>
    <p class="orange"><i>Linc guide coming soon...</i></p>
</div>
<?php include 'navbar.php' ?>
<?php include 'footer.php' ?>