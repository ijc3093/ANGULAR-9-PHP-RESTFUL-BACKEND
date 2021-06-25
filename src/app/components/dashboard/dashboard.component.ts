import { Component, OnInit } from '@angular/core';
import { Policy } from 'src/app/policy';
import { ApiService } from './../../api.service';
 
@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.css']
})
export class DashboardComponent implements OnInit {
  policies:  Policy[];
  selectedPolicy:  Policy  = { id :  null , number:null, amount:  null};

  constructor(private apiService: ApiService) { }
 
  ngOnInit() {
    this.readonly();

  }

  //read only
  readonly() {
    this.apiService.readPolicies()
    .subscribe((
      policies: Policy[])=>{
      this.policies = policies;
      //read only in inspect on the internet
      console.log(this.policies);
    })
  }


  //create
  create(form){
    if(this.selectedPolicy && this.selectedPolicy.id){
      form.value.id = this.selectedPolicy.id;
      this.apiService.updatePolicy(form.value).subscribe((policy: Policy)=>{
        console.log("Policy updated" , policy);
      });
    }
    else{
 
      this.apiService.createPolicy(form.value).subscribe((policy: Policy)=>{
        console.log("Policy created, ", policy);
      });
    }
 
  }
 
  //select specific data
  selectPolicy(policy: Policy){
    this.selectedPolicy = policy;
  }
 
  //delete delete from list
  deletePolicy(id){
    this.apiService.deletePolicy(id).subscribe((policy: Policy)=>{
      console.log("Policy deleted, ", policy);
    });
  }

}
