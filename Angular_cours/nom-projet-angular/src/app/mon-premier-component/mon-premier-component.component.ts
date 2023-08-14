import { Component, Input, OnInit} from '@angular/core';

@Component({
  selector: 'app-mon-premier-component',
  templateUrl: './mon-premier-component.component.html',
  styleUrls: ['./mon-premier-component.component.css']
})
export class MonPremierComponentComponent implements OnInit {

    @Input() persoName: string ;
    @Input() persoStatus: string ;


    constructor() {

    }

    ngOnInit() {

    }

    getStatus () {
      return this.persoStatus;
    }

    getColor (){
       if (this.persoStatus === "Présent"){
          return "green";
      }else if (this.persoStatus === "Absent"){

        return "red";

      }else{

      return "orange";
      }

    }



}
