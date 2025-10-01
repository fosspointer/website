function loadPost(filename) {
    fetch(`get-post?file=${encodeURIComponent(filename)}.md`).then(response => response.text()).then(text => {
        console.log(text);
        const blog_post = document.getElementById("blogPost");
        blog_post.querySelector('div').innerHTML = markdown(text);
        blog_post.style.visibility = 'visible';
    }).catch(e => {
        console.error(e);
    })
}

(() => {
    const _buttons = document.querySelectorAll('ul.blocks li');
    const buttons = Array.from(_buttons);

    for(const button of buttons) {
        button.onclick = () => {
            loadPost(button.textContent);
        };
    }
})();