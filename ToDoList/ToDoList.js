class ToDoList
{
    constructor()
    {
        this.showMoreLinks = new Array();
        this.hiddenClasses = new Array();
        this.eventHandlers = new Array();
    }

    Initialize()
    {
        
        this.showMoreLinks = document.getElementsByClassName("show-more");
        this.hiddenClasses = document.getElementsByClassName("hidden");

        for (let i = 0; i < this.showMoreLinks.length; i++)
        {
            let handler = e => {
                this.UpdateShowMore(i);
                e.currentTarget.removeEventListener(e.type, handler);
            }
            this.showMoreLinks[i].addEventListener( "click", handler );

            this.eventHandlers.push(handler);
        }


    }

    UpdateShowMore(aID)
    {
        for (let i = 0; i < this.showMoreLinks.length; i++)
        {
            this.showMoreLinks[i].removeEventListener( "click", this.eventHandlers[i] );
        }

        this.hiddenClasses[aID].classList.remove("hidden");  
        this.showMoreLinks[aID].innerHTML = "Show Less";
        this.showMoreLinks[aID].classList.add("show-less");
        this.showMoreLinks[aID].classList.remove("show-more");

        
        this.showMoreLinks = document.getElementsByClassName("show-more");
        this.hiddenClasses = document.getElementsByClassName("hidden");

        
        this.eventHandlers = new Array();

        for (let i = 0; i < this.showMoreLinks.length; i++)
        {
            let handler = e => {
                this.UpdateShowMore(i);
                e.currentTarget.removeEventListener(e.type, handler);
            }
            this.showMoreLinks[i].addEventListener( "click", handler );

            this.eventHandlers.push(handler);
        }
    }
}

let toDoList = new ToDoList();
toDoList.Initialize();
