class ToDoList
{
    constructor()
    {
        this.showMoreLinks = new Array();
        this.hiddenClasses = new Array();
    }

    Initialize()
    {
        
        this.showMoreLinks = document.getElementsByClassName("show-more");
        this.hiddenClasses = document.getElementsByClassName("hidden");

        for (let i = 0; i < this.showMoreLinks.length; i++)
        {
            this.showMoreLinks[i].addEventListener("click", function handler(e) { 
                this.UpdateShowMore(i);
                e.currentTarget.removeEventListener(e.type, handler);
            }.bind(this));
        }


    }

    UpdateShowMore(aID)
    {
        console.log(aID);

        this.hiddenClasses[aID].classList.remove("hidden");  
        this.showMoreLinks[aID].innerHTML = "Show Less";
        this.showMoreLinks[aID].classList.add("show-less");
        this.showMoreLinks[aID].classList.remove("show-more");

        
        this.showMoreLinks = document.getElementsByClassName("show-more");
        this.hiddenClasses = document.getElementsByClassName("hidden");
    
    
        for (let i = 0; i < this.showMoreLinks.length; i++)
        {
            this.showMoreLinks[i].addEventListener("click", function handler(e) { 
                this.UpdateShowMore(i);
                e.currentTarget.removeEventListener(e.type, handler);
            }.bind(this));
        }
    }
}

let toDoList = new ToDoList();
toDoList.Initialize();
