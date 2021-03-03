# 501cVote
Nonprofits to open for board of directors voting when in-person voting at meetings isn't a vialable option.

## Dependencies 
* Web-server with PHP
* MySQL Database

## Features
* Create pre-made "Voting Codes"
* 1 vote per code
   * Code revoting validation
* Lightweight
* Responsive UI
* Prepared SQL statements to protect against injection attacks

## Room for improvement
- [ ] Add validation to prevent more than alloted candidates
- [ ] Remove hardcoded canidates
- [ ] Add server time checks to auto open / close voting
- [ ] ADA Compliance

## Optional: Enable ReCAPTCHA
1. Open `validate_voter.php`
2. Change `$reCAPTCHA` head variable to 1.
3. In form element, update `<div class="g-recaptcha" data-sitekey="your_site_key"></div>` with site key.
4. Profit

## Setup
1. Extract all files into a PHP enabled webserver enviroment
2. Create a MySQL Database
3. Create DB Table with included `501cvote.sql` file
4. Configure DB connection with `dbconnect.php`

## Usage
1. One individual should generate and create VoterID's for eligible voters
2. Email all eligible voters with Voter ID
3. Open page for voting
4. Close page for voting once complete
5. Unassociated user not involved in steps 1 & 2 should access DB and count votes.

## Additional Notes
* 'hours' column not required for use, and likely shouldn't be used because of potential voter identification
