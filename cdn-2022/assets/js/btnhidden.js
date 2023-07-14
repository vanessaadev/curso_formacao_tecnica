const txt = document.querySelector('.btnhidden');
const txtInitialHeight = txt.clientHeight;
const overflow = document.querySelector('.overflow3');
const btn = document.querySelector('.toggle');

btn.addEventListener("click", initToggle);

function initToggle(e){
    txt.style.maxHeight =
    e.target.dataset.state === "more"
    ? `${txt.scrollHeight}px`
    : `${txtInitialHeight}px`;

    e.target.setAttribute(
        "data-state",
        e.target.dataset.state === "more" ? "less" : "more"
    );

    e.target.innerHTML = 
    e.target.dataset.state === "more" ? "Clique aqui para ver mais" : "Ver menos";

    overflow.setAttribute (
        "data-state",
        e.target.dataset.state === "more" ? "visible" : "hidden"
    );
}