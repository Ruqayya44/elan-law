<?php
/**
 * Template Name: Services Page
 *
 * @package elan-law
 */

get_header();
elan_law_page_hero(
  esc_html__( 'Our Services', 'elan-law' ),
  esc_html__( 'The Elan Law Firm', 'elan-law' )
);
?>

<!-- ============================================================
     SERVICES QUICK NAVIGATION
     ============================================================ -->
<section class="services-nav-section">
  <div class="container">
    <h2 class="services-nav-title"><?php esc_html_e( 'All Services', 'elan-law' ); ?></h2>
    <nav class="services-quick-nav" aria-label="<?php esc_attr_e( 'Services Navigation', 'elan-law' ); ?>">
      <a href="#personal-injury"><?php esc_html_e( 'Personal Injury', 'elan-law' ); ?></a>
      <a href="#bed-bug-lawyer"><?php esc_html_e( 'Bed Bug Lawyer', 'elan-law' ); ?></a>
      <a href="#real-estate"><?php esc_html_e( 'Real Estate & Transactional', 'elan-law' ); ?></a>
      <a href="#wills-trusts"><?php esc_html_e( 'Wills / Trusts / Estates', 'elan-law' ); ?></a>
      <a href="#commercial-litigation"><?php esc_html_e( 'Commercial Litigation', 'elan-law' ); ?></a>
      <a href="#automobile-accidents"><?php esc_html_e( 'Automobile Accidents', 'elan-law' ); ?></a>
      <a href="#uber-accident"><?php esc_html_e( 'Uber Accident Attorney', 'elan-law' ); ?></a>
      <a href="#truck-accident"><?php esc_html_e( 'Truck Accident Lawyer', 'elan-law' ); ?></a>
      <a href="#employment-law"><?php esc_html_e( 'Employment Law / Whistleblowers', 'elan-law' ); ?></a>
      <a href="#flsa"><?php esc_html_e( 'Fair Labor Standards Act (FLSA)', 'elan-law' ); ?></a>
      <a href="#general-business"><?php esc_html_e( 'General Business Law', 'elan-law' ); ?></a>
    </nav>
  </div>
</section>

<!-- ============================================================
     SERVICE 1 — PERSONAL INJURY
     ============================================================ -->
<section id="personal-injury" class="service-detail-section bg-white">
  <div class="container">
    <div class="service-detail-inner">
      <div class="service-detail-icon-wrap fade-up">
        <div class="service-detail-icon">
          <i class="fa-solid fa-user-injured"></i>
        </div>
      </div>
      <div class="service-detail-content fade-up delay-1">
        <p class="eyebrow"><?php esc_html_e( 'The Elan Law Firm', 'elan-law' ); ?></p>
        <h2><?php esc_html_e( 'Personal Injury', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'THE ELAN LAW FIRM is dedicated to recovering the compensation that its injured clients deserve.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'Our attorneys aggressively pursue compensation for individuals who have suffered injuries due to the negligence of others. Whether the injury resulted from automobile accidents, unsafe property conditions, defective products, workplace incidents, or other acts of negligence, our legal team is committed to protecting your rights and securing the maximum compensation available under the law.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'We understand that a serious injury can impact every aspect of your life. Medical expenses, lost wages, pain and suffering, and emotional distress can place tremendous pressure on victims and their families. Our attorneys provide compassionate guidance throughout every stage of the legal process while fighting tirelessly on behalf of our clients.', 'elan-law' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">
          <?php esc_html_e( 'Free Consultation', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICE 2 — BED BUG LAWYER
     ============================================================ -->
<section id="bed-bug-lawyer" class="service-detail-section bg-offwhite">
  <div class="container">
    <div class="service-detail-inner reverse">
      <div class="service-detail-content fade-up">
        <p class="eyebrow"><?php esc_html_e( 'Firm Specialty', 'elan-law' ); ?></p>
        <h2><?php esc_html_e( 'Bed Bug Lawyer', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'Bed bugs are parasites that feed exclusively on the blood of warm-blooded hosts.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'THE ELAN LAW FIRM has become widely recognized for representing victims who have suffered injuries resulting from bed bug infestations in hotels, motels, apartment buildings, nursing homes, and other residential or commercial properties.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'Our attorneys work diligently to hold negligent property owners accountable and pursue compensation for physical injuries, emotional distress, medical expenses, lost income, and other damages caused by unsafe living conditions.', 'elan-law' ); ?></p>
        <ul class="check-list">
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Hotels, motels, and bed & breakfasts', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Apartment buildings and nursing homes', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Residential and commercial properties nationwide', 'elan-law' ); ?></li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">
          <?php esc_html_e( 'Free Case Review', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
      <div class="service-detail-icon-wrap fade-up delay-1">
        <div class="service-detail-icon specialty">
          <i class="fa-solid fa-bed"></i>
        </div>
        <div class="service-featured-badge">
          <i class="fa-solid fa-shield-halved"></i>
          <div>
            <strong><?php esc_html_e( 'Firm Specialty', 'elan-law' ); ?></strong>
            <span><?php esc_html_e( 'Nationwide Representation', 'elan-law' ); ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICE 3 — REAL ESTATE AND TRANSACTIONAL
     ============================================================ -->
<section id="real-estate" class="service-detail-section bg-white">
  <div class="container">
    <div class="service-detail-inner fade-up">
      <div class="service-detail-icon-wrap">
        <div class="service-detail-icon">
          <i class="fa-solid fa-building"></i>
        </div>
      </div>
      <div class="service-detail-content fade-up delay-1">
        <p class="eyebrow"><?php esc_html_e( 'Property Law', 'elan-law' ); ?></p>
        <h2><?php esc_html_e( 'Real Estate and Transactional', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'The ownership or lease of property is an integral part of everyone\'s personal and business life.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'Our attorneys assist individuals, businesses, landlords, tenants, buyers, and sellers with a wide variety of real estate matters. We provide experienced legal guidance for residential and commercial real estate transactions, contract negotiations, lease agreements, property disputes, closings, and other transactional matters.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'We work closely with every client to ensure their legal interests remain fully protected throughout each transaction.', 'elan-law' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">
          <?php esc_html_e( 'Free Consultation', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICE 4 — WILLS / TRUSTS / ESTATES
     ============================================================ -->
<section id="wills-trusts" class="service-detail-section bg-navy">
  <div class="container">
    <div class="service-detail-inner reverse">
      <div class="service-detail-content fade-up">
        <p class="eyebrow" style="color:var(--accent-light);"><?php esc_html_e( 'Estate Planning', 'elan-law' ); ?></p>
        <h2 style="color:var(--white);"><?php esc_html_e( 'Wills / Trusts / Estates', 'elan-law' ); ?></h2>
        <p style="color:rgba(255,255,255,0.82);"><?php esc_html_e( 'A will is an essential document if you want to ensure your assets are distributed according to your wishes upon your passing.', 'elan-law' ); ?></p>
        <p style="color:rgba(255,255,255,0.82);"><?php esc_html_e( 'Our attorneys help individuals and families prepare wills, trusts, powers of attorney, healthcare directives, and estate planning documents designed to protect loved ones and preserve family assets.', 'elan-law' ); ?></p>
        <p style="color:rgba(255,255,255,0.82);"><?php esc_html_e( 'Proper estate planning provides peace of mind while minimizing unnecessary legal complications for future generations.', 'elan-law' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">
          <?php esc_html_e( 'Schedule a Consultation', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
      <div class="service-detail-icon-wrap fade-up delay-1">
        <div class="service-detail-icon" style="background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.2);">
          <i class="fa-solid fa-file-signature" style="color:var(--accent-light);"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICE 5 — COMMERCIAL LITIGATION
     ============================================================ -->
<section id="commercial-litigation" class="service-detail-section bg-white">
  <div class="container">
    <div class="service-detail-inner fade-up">
      <div class="service-detail-icon-wrap">
        <div class="service-detail-icon">
          <i class="fa-solid fa-gavel"></i>
        </div>
      </div>
      <div class="service-detail-content fade-up delay-1">
        <p class="eyebrow"><?php esc_html_e( 'Business Disputes', 'elan-law' ); ?></p>
        <h2><?php esc_html_e( 'Commercial Litigation', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'THE ELAN LAW FIRM represents corporate clients and individuals in a broad range of commercial lawsuits.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'Our commercial litigation practice includes contract disputes, partnership disputes, shareholder litigation, breach of fiduciary duty claims, business torts, fraud claims, collections, and other complex commercial matters.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'We develop practical litigation strategies focused on achieving successful outcomes both inside and outside the courtroom.', 'elan-law' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">
          <?php esc_html_e( 'Free Consultation', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICE 6 — AUTOMOBILE ACCIDENTS
     ============================================================ -->
<section id="automobile-accidents" class="service-detail-section bg-offwhite">
  <div class="container">
    <div class="service-detail-inner reverse">
      <div class="service-detail-content fade-up">
        <p class="eyebrow"><?php esc_html_e( 'Vehicle Accidents', 'elan-law' ); ?></p>
        <h2><?php esc_html_e( 'Automobile Accidents', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'Motor vehicle accidents are among the most common causes of serious injury in the United States.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'Our attorneys represent drivers, passengers, pedestrians, cyclists, and families affected by automobile accidents caused by negligent drivers.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'We aggressively pursue claims involving catastrophic injuries, wrongful death, insurance disputes, uninsured motorists, and other motor vehicle accident cases while protecting our clients\' legal rights.', 'elan-law' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">
          <?php esc_html_e( 'Free Consultation', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
      <div class="service-detail-icon-wrap fade-up delay-1">
        <div class="service-detail-icon">
          <i class="fa-solid fa-car-burst"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICE 7 — UBER ACCIDENT ATTORNEY
     ============================================================ -->
<section id="uber-accident" class="service-detail-section bg-white">
  <div class="container">
    <div class="service-detail-inner fade-up">
      <div class="service-detail-icon-wrap">
        <div class="service-detail-icon">
          <i class="fa-solid fa-car-side"></i>
        </div>
      </div>
      <div class="service-detail-content fade-up delay-1">
        <p class="eyebrow"><?php esc_html_e( 'Rideshare Accidents', 'elan-law' ); ?></p>
        <h2><?php esc_html_e( 'Uber Accident Attorney', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'Your right to a safe Uber ride is built into the fare.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'This fee pays for background checks on Uber drivers, motor vehicle screenings, and driver safety education.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'If you have been injured while riding in an Uber or other rideshare vehicle, our attorneys can help determine liability, deal with insurance companies, and pursue compensation for your injuries, medical expenses, lost income, and other damages.', 'elan-law' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">
          <?php esc_html_e( 'Free Consultation', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICE 8 — TRUCK ACCIDENT ATTORNEY
     ============================================================ -->
<section id="truck-accident" class="service-detail-section bg-offwhite">
  <div class="container">
    <div class="service-detail-inner reverse">
      <div class="service-detail-content fade-up">
        <p class="eyebrow"><?php esc_html_e( 'Commercial Vehicle Accidents', 'elan-law' ); ?></p>
        <h2><?php esc_html_e( 'Truck Accident Attorney', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'The phenomenon of trucker fatigue has been extensively documented and studied by federal road safety organizations within the United States.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'Truck accidents often involve severe injuries due to the size and weight of commercial vehicles.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'Our legal team investigates every aspect of a trucking accident, including driver negligence, federal safety violations, maintenance failures, cargo issues, and employer liability to help maximize our clients\' recovery.', 'elan-law' ); ?></p>
        <ul class="check-list">
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Driver negligence and trucker fatigue claims', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Federal safety violation investigations', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Maintenance failures and cargo issue claims', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Employer liability and insurance disputes', 'elan-law' ); ?></li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">
          <?php esc_html_e( 'Free Consultation', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
      <div class="service-detail-icon-wrap fade-up delay-1">
        <div class="service-detail-icon">
          <i class="fa-solid fa-truck"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICE 9 — EMPLOYMENT LAW / WHISTLEBLOWERS
     ============================================================ -->
<section id="employment-law" class="service-detail-section bg-navy">
  <div class="container">
    <div class="service-detail-inner fade-up">
      <div class="service-detail-icon-wrap">
        <div class="service-detail-icon" style="background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.2);">
          <i class="fa-solid fa-bullhorn" style="color:var(--accent-light);"></i>
        </div>
      </div>
      <div class="service-detail-content fade-up delay-1">
        <p class="eyebrow" style="color:var(--accent-light);"><?php esc_html_e( 'Employee Rights', 'elan-law' ); ?></p>
        <h2 style="color:var(--white);"><?php esc_html_e( 'Employment Law / Whistleblowers', 'elan-law' ); ?></h2>
        <p style="color:rgba(255,255,255,0.82);"><?php esc_html_e( 'THE ELAN LAW FIRM represents executives and other employees in employment-related disputes.', 'elan-law' ); ?></p>
        <p style="color:rgba(255,255,255,0.82);"><?php esc_html_e( 'Our attorneys handle matters involving wrongful termination, workplace discrimination, retaliation, unpaid wages, harassment, employment contracts, whistleblower protection, and other employment law issues.', 'elan-law' ); ?></p>
        <p style="color:rgba(255,255,255,0.82);"><?php esc_html_e( 'We are committed to protecting employee rights while pursuing fair compensation and justice.', 'elan-law' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">
          <?php esc_html_e( 'Protect Your Rights', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICE 10 — THE FAIR LABOR STANDARDS ACT (FLSA)
     ============================================================ -->
<section id="flsa" class="service-detail-section bg-white">
  <div class="container">
    <div class="service-detail-inner reverse">
      <div class="service-detail-content fade-up">
        <p class="eyebrow"><?php esc_html_e( 'Federal Labor Law', 'elan-law' ); ?></p>
        <h2><?php esc_html_e( 'The Fair Labor Standards Act (FLSA)', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'You may be protected by the FLSA.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'Call our FLSA lawyers today and we\'ll make sure you are receiving the compensation you deserve.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'Our attorneys represent employees in overtime violations, minimum wage disputes, employee misclassification, unpaid compensation claims, and other wage and hour matters governed by federal labor laws.', 'elan-law' ); ?></p>
        <ul class="check-list">
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Overtime pay violations and unpaid wages', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Minimum wage disputes under federal law', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Employee misclassification claims', 'elan-law' ); ?></li>
          <li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Unpaid compensation and wage & hour matters', 'elan-law' ); ?></li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">
          <?php esc_html_e( 'Free Consultation', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
      <div class="service-detail-icon-wrap fade-up delay-1">
        <div class="service-detail-icon">
          <i class="fa-solid fa-hand-holding-dollar"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICE 11 — GENERAL BUSINESS LAW
     ============================================================ -->
<section id="general-business" class="service-detail-section bg-offwhite">
  <div class="container">
    <div class="service-detail-inner fade-up">
      <div class="service-detail-icon-wrap">
        <div class="service-detail-icon">
          <i class="fa-solid fa-briefcase"></i>
        </div>
      </div>
      <div class="service-detail-content fade-up delay-1">
        <p class="eyebrow"><?php esc_html_e( 'Business Services', 'elan-law' ); ?></p>
        <h2><?php esc_html_e( 'General Business Law', 'elan-law' ); ?></h2>
        <p><?php esc_html_e( 'THE ELAN LAW FIRM provides comprehensive legal services for businesses of all sizes.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'We advise entrepreneurs, startups, partnerships, corporations, and established companies on business formation, contracts, compliance, governance, negotiations, risk management, business transactions, and ongoing legal matters.', 'elan-law' ); ?></p>
        <p><?php esc_html_e( 'Our goal is to help businesses operate confidently while minimizing legal risks and protecting long-term success.', 'elan-law' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">
          <?php esc_html_e( 'Free Consultation', 'elan-law' ); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     CTA BANNER
     ============================================================ -->
<?php get_template_part( 'template-parts/cta-banner' ); ?>

<?php get_footer();
