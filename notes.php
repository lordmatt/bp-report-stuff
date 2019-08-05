<?php

/* 
 * Just my thoughts on creting this project - not intended to do anything at all
 * 
 * Moderation Table
 * ----------------
 * ID
 * reporting-user-id
 * offending-user-id
 * Offending-thing (profile,content,etc.)
 * nature-of-offense (breach TOS, spam, fake, scam, crime, abuse, etc.)
 * Date
 * Moderator-Outcome (default:pending) (pending,warned,closed-not-offence,account-closed)
 * 
 * Moderation Notes
 * ----------------
 * ID
 * Moderation-id
 * moderator-id
 * date
 * comment
 * action
 * 
 * Views
 * -----
 * - Moderator view (open reports)
 * - Admin view (open, closed, and executive actions)
 * - Your view (Your open reports, your closed reports)
 * 
 * Front end UI
 * ------------
 * - Ajax Link Opens Form - prefilled from context for filing report
 */

