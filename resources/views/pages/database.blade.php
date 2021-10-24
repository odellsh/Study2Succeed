@extends('layouts.subject-layout')

@section('table-of-contents')

<div class="toc">
    <h2>Table Of Contents</h2>
    <ul>
        <li><a href="#er-model">Entity-Relationship (ER) Model</a></li>
        <li><a href="#rm">Relational Model (RM) and its Constraints</a></li>
        <li><a href="#queries">SQL Data Types and Queries</a></li>
    </ul>
</div>



<div class="container-fluid">
  <div class="row text-center" id="er-model">

    <div class="col-sm-auto">
        <p><b>Entity-Relationship (ER) Model</b></p>
        <img src="assets/img/query.jpg" alt="query" style="width:300px; height:200px;" />
    </div>

    <div class="col-7 text-left align-self-center">
        <p>What is an entity-relationship (ER) model? According to lucidchart.com, an ER diagram is:
           An Entity Relationship (ER) Diagram is a type of flowchart that illustrates how “entities”
           such as people, objects or concepts relate to each other within a system. ER Diagrams are
           most often used to design or debug relational databases in the fields of software engineering,
           business information systems, education and research. Also known as ERDs or ER Models, they use
           a defined set of symbols such as rectangles, diamonds, ovals and connecting lines to depict the
           interconnectedness of entities, relationships and their attributes. They mirror grammatical structure,
           with entities as nouns and relationships as verbs. <a href="#">Click here</a> to view more information.</p>
    </div>

    <div class="col-sm-auto text-center align-self-center">
        <button type="button" class="btn btn-primary">Flashcards</button><br><br>
        <button type="button" class="btn btn-primary">Practice Test</button>
    </div>
  </div>

  <div class="row text-center" id="rm">

    <div class="col-sm-auto">
        <p><b>Relational Model (RM) and its Constraints</b></p>
        <img src="assets/img/query.jpg" alt="query" style="width:300px; height:200px;" />
    </div>

    <div class="col-7 text-left align-self-center">
        <p>What is a relational model (RM) and what are its constraints? According to digitalocean.com, a RM is:
           The relational model is an abstract model used to organize data within a database. In order to control
           access to a database, write data, run queries, or perform any other tasks related to database management,
           a database management system must have some kind of underlying model that defines how the data within it
           are organized. <a href="#">Click here</a> to view more information.</p>
    </div>

    <div class="col-sm-auto text-center align-self-center">
        <button type="button" class="btn btn-primary">Flashcards</button><br><br>
        <button type="button" class="btn btn-primary">Practice Test</button>
    </div>

  </div>

  <div class="row text-center" id="queries">

    <div class="col-sm-auto">
        <p><b>Relational Model (RM) and its Constraints</b></p>
        <img src="assets/img/query.jpg" alt="query" style="width:300px; height:200px;" />
    </div>

    <div class="col-7 text-left align-self-center">
        <p>SQL has many different queries a user can do in order to gather information. Too many to count!
           More information about all the queries SQL utilizes can be found <a href="#">here</a>.</p>
    </div>

    <div class="col-sm-auto text-center align-self-center">
        <button type="button" class="btn btn-primary">Flashcards</button><br><br>
        <button type="button" class="btn btn-primary">Practice Test</button>
    </div>

  </div>

</div>

@endsection
