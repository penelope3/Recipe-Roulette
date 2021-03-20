{{-- In Progress --}}
@extends ('app')

@section('content')
    <div class="float-container">
        <div class="main">
            <div class="input">
                <form>
                    <form>
                        <label for="Keyword">Enter any allergies or ingredients, one at a time</label>
                        <br><br>
                        <input type="text" id="restriction" maxlength="30">
                        <input type="submit" value="Submit" id="submitRestriction"/>
                        <br>
                    </form>
                    <div class="chips" id="restrictionChips">
                      <div class="chip">
                          Fish <span class="closebtn">&times;</span>
                      </div>
                      <div class="chip">
                          Peanuts <span class="closebtn">&times;</span>
                      </div>
                    </div>
                    <input type="submit" value="Submit" id="submitRestrictions"/>
                </form>
            </div>
        </div>
    </div>
    <div class="float-container">
        <div class="Keywords">
        </div>
    </div>
@endsection
