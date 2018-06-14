import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app.routing.module';
import { RootComponent } from './root.component';
import { AuthComponent, AppComponent, ErrorComponent } from './components/layouts';
import { LoginComponent, SocialComponent } from './components/auth';

@NgModule({
  declarations: [
    RootComponent,
    AuthComponent,
    AppComponent,
    ErrorComponent,
    LoginComponent,
    SocialComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [RootComponent]
})
export class AppModule { }
