

function drawDetails(){
    const {types, projects} = data;
    const PROJECT_URL = new URL(window.location.href);
    const ID = parseInt(PROJECT_URL.searchParams.get("id"));
    const DATA_REVERSE = projects.reverse();

    const TITLE = document.querySelector('.project-content-title');
    const DESCRIPTION = document.querySelector('.project-content-description');
    const IMG = document.querySelector('.project-illustration-img');
    const TECHNOLOGY = document.querySelector('.project-content-technology-item');

    const LINKS = {
        website: document.querySelector('.link-website a'),
        github: document.querySelector('.link-github a'),
        gitlab: document.querySelector('.link-gitlab a'),
        codepen: document.querySelector('.link-codepen a'),
        youtube: document.querySelector('.link-youtube a'),
        itchio: document.querySelector('.link-itchio a')
    }

    const LIST = {
        website: document.querySelector('.link-website'),
        github: document.querySelector('.link-github'),
        gitlab: document.querySelector('.link-gitlab'),
        codepen: document.querySelector('.link-codepen'),
        youtube: document.querySelector('.link-youtube'),
        itchio: document.querySelector('.link-itchio')
    }

    console.log(LINKS.gitlab);

    if(!DATA_REVERSE[ID].public){
        window.location.replace('/')
    }

    for(i = 0; i<DATA_REVERSE.length; i++){
        const {id, title, description, technology, public, date, img, links} = DATA_REVERSE[i];

        if(id === ID){
            TITLE.textContent = title;
            DESCRIPTION.textContent = description;
            technology.map(t => TECHNOLOGY.textContent+=`${t}, `);
            IMG.setAttribute('src', img);
            IMG.setAttribute('alt', 'Image du projet : '+title)

            if(links.website){
                LIST.website.classList.remove('disabled');
                LINKS.website.href = links.website;
            }
            if(links.github){
                LIST.github.classList.remove('disabled');
                LINKS.github.href = links.github;
            }
            if(links.gitlab){
                LIST.gitlab.classList.remove('disabled');
                LINKS.gitlab.href = links.gitlab;
            }
            if(links.codepen){
                LIST.codepen.classList.remove('disabled');
                LINKS.codepen.href = links.codepen;
            }
            if(links.youtube){
                LIST.youtube.classList.remove('disabled');
                LINKS.youtube.href = links.youtube;
            }
            if(links.website){
                LIST.itchio.classList.remove('disabled');
                LINKS.itchio.href = links.itchio;
            }
        }
    }

}

function loadCards(destination, limit){
    const {types, projects} = data;

    let length;
    let count = 0;

    if(limit === null){
        length = data.length;
    } else {
        length = limit;
    }

    for (let i = 0; i < projects.length; i++) {
        if(projects[i].public){
            let card = {
                container : document.createElement('article'),
                illustration : document.createElement('div'),
                content : document.createElement('div'),
                date: document.createElement('p'),
                title : document.createElement('h3'),
                description : document.createElement('p'),
                button : document.createElement('a')
            }

            card.container.classList = 'card';
            card.illustration.classList = 'card-illustration';
            card.content.classList = 'card-content';
            card.button.classList = "btn btn-read";
            card.title.classList = "card-title";
            card.description.classList = "card-description";
            card.date.classList = "card-date";

            card.date.textContent = projects[i].date;
            card.button.textContent = "En savoir plus";
            card.button.href=`/projet.html?id=${(projects[i].id)}`;
            card.button.setAttribute('target', '_blank');

            card.content.append(card.date, card.title, card.description, card.button);
            card.container.append(card.illustration, card.content);

            card.illustration.style.backgroundImage = 'url('+projects[i].img[0]+')';
            card.title.textContent = projects[i].title;
            card.description.textContent = projects[i].shortDescription;

            destination.append(card.container);
            count++;

            if(count >= length){
                break;
            }
        }
    }
}
