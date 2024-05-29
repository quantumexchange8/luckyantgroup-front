@extends('master.master')
@section('title', 'Customer Agreement')
@section('content')

<div class="uk-section  uk-background-cover"  style="background-image: url('../img/blockit/bg-01.png');">
    <div class="uk-container ">
        <div class="uk-grid">
            <div class="uk-width-1-1" >
                <h1 class="uk-text-superlarge2 uk-padding uk-text-white uk-margin-remove-bottom uk-visible@m">Customer Agreement</h1>
                <h1 class="uk-text-superlarge1 uk-text-white uk-margin-remove-bottom uk-hidden@m">Customer Agreement </h1>
            </div>
        </div>
    </div>
</div>


<div class="uk-container uk-margin-top">
    <div class="uk-grid" uk-grid>
        <!-- Sidebar -->
        <div class="uk-width-expand@m">
            <div class="uk-card uk-card-default uk-card-body uk-margin-top">
                <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Content</h5> 
                <ul class="uk-list">
                    <li><a href="{{url('customer-agreement')}}#intro">Introduction</a></li>
                    <li><a href="{{url('customer-agreement')}}#term">Terms & Condition</a></li>
                    <li><a href="{{url('customer-agreement')}}#trading">Online Trading</a></li>
               
                </ul>
            </div>
        </div>

        <!-- Intro Area -->
        <div class="uk-width-3-4@m uk-margin-top" id="intro">
            <article>
             
                <h2>Customer Agreement</h2>
         
                <p class="uk-text-justify uk-text-grey uk-text-default">
                    The terms and conditions of Customer Agreement constitute a legal contract between
                    LUCKY ANT TRADING LIMITED TRADING (referred to herein as “LUCKY ANT TRADING LIMITED” or “we”), and the party or
                    parties (each referred to herein as a “Client” or “you”) executing this
                    agreement.LUCKY ANT TRADING LIMITED is registered and licensed by the relevant regulatory
                    authorities (31000262677236), providing clients with foreign exchange, bullion and
                    contracts for difference trading facilities. This Agreement shall govern all trading activity and should be read carefully by
                    yourself.
                </p>
                <p class="uk-text-justify">
                    You guarantee the accuracy and truthfulness of all information, documentation, and
                    other disclosures provided to us. You commit to notifying us in writing of any changes
                    to the provided information. When submitting copies of documents via mail, fax, or
                    electronic means, you assure that these documents are faithful reproductions of the
                    originals.
                </p>
            
                <!-- Add more sections as needed -->
            </article>
        </div>
    </div>
</div>
<div class="uk-container uk-margin-top" id="term">
    <div class="uk-grid" uk-grid>
        <!--------Terms & Condition------------->
        <div class="uk-width-1-1@m uk-margin-top">
            <h2>Terms & Condition</h2>
        </div>
        <div class="uk-width-1-1@m">
            <div class="uk-card uk-card-default uk-card-body uk-margin-bottom">
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title">The Services We Will Provide</h1>
                    <p class="uk-text-justify uk-text-meta">We will adhere to the rules and regulations set forth by the relevant regulatory
                        authorities and provide you with an execution-only dealing service in foreign
                        exchange and contracts for differences, encompassing underlying assets such as
                        precious metals, energies, indices, shares, and cryptocurrency ('Contracts') offered by
                        LUCKY ANT TRADING LIMITED</p>
                    <p class="uk-text-justify uk-text-meta">Both LUCKY ANT TRADING LIMITED and the Client will act as principals in the entered contracts. You, as the Client, assume direct and personal 
                        responsibility for fulfilling obligations in every transaction, whether dealing directly or through an agent, or as an agent for another person. You agree to indemnify us 
                        for any liabilities, losses, or costs arising from any failure on your part to fulfill such obligations. </p>  
                    <p class="uk-text-justify uk-text-meta">All orders and instructions provided by you for the services are subject to these terms. Any additional terms introduced by you through orders, order confirmations, or similar
                        means are excluded. Services may involve margined transactions, where the Client
                        must deposit cash to secure performance of their obligations under the contract. The
                        Client acknowledges that all transactions are subject to and comply with the prevailing
                        Market Rules, which typically include broad powers in emergency or undesirable
                        situations.</p>      
                    <p class="uk-text-justify uk-text-meta">We reserve the right to amend, suspend, and/or terminate any or all services at any
                        time for valid reasons. While we will strive to provide advance notice whenever
                        possible, this may not always be practical due to business reasons.</p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title">Execution</h1>
                    <p class="uk-text-justify uk-text-meta">LUCKY ANT TRADING LIMITED will exclusively provide an execution-only dealing service, refraining from
                        offering investment advice. The execution of a Contract with you does not imply any
                        recommendation or endorsement by LUCKY ANT TRADING LIMITED regarding the merits or suitability of
                        the Contract for you. Additionally, LUCKY ANT TRADING LIMITED does not provide trading or market
                        recommendations, advice, or instructions in its communications.</p>      
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title">Credit</h1>
                    <p class="uk-text-justify uk-text-meta">Details regarding any available credit arrangement will be outlined in and subject to
                        the terms, conditions, and limits agreed upon in separate correspondence. Your credit
                        limit should not surpass the total amount you are willing and financially able to risk. If
                        any Contracts exceed the designated credit or other limits, we may terminate some or
                        all contracts under Term 4 to bring your liability back within the credit limit. At our
                        absolute discretion, we may consider extending additional credit in the event of a
                        margin call. However, the availability and suitability of such credit will be contingent
                        upon a reassessment of your financial circumstances.
                    </p>      
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Margining Arrangements</h1>
                    <p class="uk-text-justify uk-text-meta">The client is obligated to promptly pay to LUCKY ANT TRADING LIMITED upon demand:
                    </p>
                  <ol type="i">
                    <li>Sums of money as deposits, initial margin, or variation margin as deemed
                        necessary by LUCKY ANT TRADING LIMITED.</li>  
                    <li>Amounts due under a contract and any sums required for clearing any debit</li>
                    <li>Sums of money requested by LUCKY ANT TRADING LIMITED as security for the client's
                        obligations.</li>
                  </ol>    
                    <p class="uk-text-justify uk-text-meta">Margin payments may be required to cover potential losses in adverse market
                        movements. Our determination of the current market value and the amount of
                        additional and/or variation margin shall be final and not subject to challenge by the
                        client. Margin calls may be communicated through various means (telephone, fax, or
                        email). If delivered via email, it will be sent to your designated email address and may
                        not be confirmed by telephone, fax, or letter unless exceptional circumstances
                        warrant it, at our absolute discretion.</p>
                    <p class="uk-text-justify uk-text-meta">We do not accept third-party payments for funding your account, and likewise, we will
                        not disburse funds from your account to any third parties. Failure to provide any required margin, deposit, or other sums may result in the
                        closure of all open contracts by LUCKY ANT TRADING LIMITED without prior notice.</p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Charges and Commissions</h1>
                    <p class="uk-text-justify uk-text-meta">We will mutually agree with you on the commission amount before entering into any
                        contract, and this will be detailed on the statement provided to you. Commission rates
                        will be based on prevailing rates at the time. Please note that commissions and
                        charges are subject to change without prior notice. Additionally, we may have soft
                        commission agreements in place, and these will be implemented in line with
                        commercial efficiency and market practices, adhering to our policy.
                    </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Interest/Rollover</h1>
                    <p class="uk-text-justify uk-text-meta">No interest will be credited for any monies held on account or used for margin
                        payments. These funds will be maintained in a client bank account. A finance fee may
                        be charged or credited to your account based on the nature of your open positions,
                        the relevant contract, and the prevailing interest rates. Upon opening a contract
                        position, we will calculate the interest that would be earned on the funds required to
                        initiate the corresponding position in the underlying investment, at a rate
                        communicated to you in writing. The interest amount will be calculated and accrue on
                        a daily basis as long as your contract position remains open.
                    </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Position Limit</h1>
                    <p class="uk-text-justify uk-text-meta">LUCKY ANT TRADING LIMITED retains the right to restrict the number of positions that the client can
                        open or maintain in their account. We also reserve the right to refuse the acceptance
                        of any additional orders once the limit has been surpassed, and we may liquidate all
                        or part of the positions that exceed the limit thereafter. 
                    </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Exclusion of Liability</h1>
                    <p class="uk-text-justify uk-text-meta">No claims shall be made against LUCKY ANT TRADING LIMITED, any associated company, or any
                        employee, to recover any loss or damage incurred due to the fulfillment of our
                        obligations under this agreement. This provision applies, provided that such loss or
                        damage does not result from the negligence or willful default of LUCKY ANT TRADING LIMITED, its
                        associates, or employees.
                    </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Authorisation & Other Communications </h1>
                    <p class="uk-text-justify uk-text-meta">Unless you expressly instruct us otherwise, we reserve the right to rely on and act in
                        accordance with any instructions, requests, and notices, whether in writing or
                        communicated in any other form, given or purported to be given by any individual or
                        person reasonably believed by us to be an agent, attorney, or otherwise authorized by you. In our absolute discretion and without explanation to you, we may refuse to act
                        upon any instruction, particularly if we believe it may not be practical or if acting on the
                        instruction would, in our opinion, violate any law, rule, regulation, or condition of this
                        agreement. In the case of instructions received from an agent, we may refuse if we
                        reasonably believe that the agent may be acting beyond their authority. 
                    </p>
                    <p class="uk-text-justify uk-text-meta">Additional dealing procedures may be provided by us to you from time to time none of
                        which form part of this agreement.
                        If, at any time, you are unable to communicate with us for any reason, we shall not be
                        responsible for any loss, damage, or cost caused to you due to any act, error, delay, or omission resulting from your inability to enter into a transaction. We will not be
                        responsible for any loss, damage, or cost caused to you by any act, error, or omission
                        or delay, including your inability to close a transaction, except where such inability
                        results from our fraud, willful default, or  gross negligence.
                    </p>
                    <p class="uk-text-justify uk-text-meta">You acknowledge and agree that any instruction or communication transmitted by you
                        or on your behalf is at your own risk. You authorize us to rely on and act upon any
                        instruction, whether in writing or not, that we believe in good faith to have been given
                        by you or on your behalf by any agent or intermediary whom we believe in good faith
                        to have been  duly authorized by you. </p>
                    <p class="uk-text-justify uk-text-meta">You also agree that we may record all telephone conversations between you and us, and we may use such recordings or transcripts from such recordings as evidence in
                        any dispute or anticipated dispute between you and us. </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Changes in Terms </h1>
                    <p class="uk-text-justify uk-text-meta">These terms and conditions are subject to change, and we will notify you of any
                        changes through a written notice describing the relevant modifications. Such changes
                        will become effective on a date specified in the notice, which will be at least 10 days
                        after the date on which the notice is deemed to be received by you. Any such change
                        will not affect any legal rights or obligations that may have previously accrued to or
                        been incurred by you or us.
                    </p>
               
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Stop and Limit Orders </h1>
                    <p class="uk-text-justify uk-text-meta">We may in our absolute discretion accept an instruction (a “stop order” or “limit order”)
                        from you to open or close any Contract when our quote in respect of the relevant
                        investment, or (as the case may be) an underlying market quotation relating thereto, reaches or goes beyond a level specified by you. You may specify that such an
                        instruction is to apply for a limited duration or for an indefinite period (a “Good Till Cancelled” or “GTC” order). If we accept a Stop or Limit Order then, when the level of
                        our current quote or (as the case may be) the relevant market quotation relating
                        thereto reaches or goes beyond the level of your Stop or Limit Order, provided that the
                        conditions in this paragraph are satisfied your instruction will be executed
                        automatically at the level of your Stop or Limit Order.
                    </p>
                    <p class="uk-text-justify uk-text-meta">You acknowledge that where the underlying market is moving rapidly our quote may
                        have gone beyond the level of your Stop or Limit Order by the time your order is
                        executed.Limit Order by the time your order is executed. You may with our prior
                        consent (and such consent will not be unreasonably withheld) cancel or amend the
                        level of Stop or Limit Order at any time before our quote or the relevant market
                        quotation reaches or goes beyond the relevant level. However, once the level has
                        been reached you may not cancel or amend the level of order.</p>
                    
                    <p class="uk-text-justify uk-text-meta">If you enter into any Contract and place a Stop or Limit Order which, when executed, would be capable of closing or partly closing such Contract and you subsequently
                        instruct us to close that Contract, or any part of it prior to the level of the Stop or Limit
                        Order being reached, it is your responsibility to cancel the Stop or Limit Order if you
                        do not want the order to remain valid. If you close your original Contract and fail to
                        cancel the Stop or Limit Order we shall be entitled in our absolute discretion to treat
                        the Stop or Limit Order as an instruction to enter into a new Contract for you once our
                        quote or (as the case may be) the relevant market quotation reaches or goes beyond
                        the level of the Stop or Limit Order. </p>
                    <p class="uk-text-meta">The conditions referred to in this paragraph are as follows : </p>
                        <ul class="uk-text-meta">
                            <li class="uk-margin-bottom">
                                When you instruct us to close part but not all of a Contract entered into, both the
                                part of the Contract which you instruct us to close and the part which would
                                remain open if we carried out your instruction must not be smaller than the
                                minimum size advised by us to you from time to time.
                            </li>
                            <li class="uk-margin-bottom">A Force Majeure Event must not have occurred.</li>
                            <li class="uk-margin-bottom">When you instruct us to open a Contract you must not have committed a material
                                default.</li>
                            <li class="uk-margin-bottom">The telephone or internet conversation in which you instruct us to open or close
                                the Contract must not be terminated as a result of circumstances beyond our
                                reasonable control before we have confirmed that your instruction has been
                                executed by us.</li>
                            <li class="uk-margin-bottom">When you instruct us to open any Contract, the opening of the Contract must not
                                result in your exceeding any credit or other limit placed upon your dealing and</li>
                            <li class="uk-margin-bottom"s> The instruction must be given to us during normal trading hours for the
                                investment in respect of which you instruct us to open or close the Contract.</li>
                        </ul>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Single Agreement </h1>
                    <p class="uk-text-justify uk-text-meta">Each Contract and all other transactions entered into between us and you under this
                        agreement will be entered into in consideration of each other and constitute a single
                        agreement between us and you.
                    </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Statement </h1>
                    <p class="uk-text-justify uk-text-meta">Monthly statements of your account shall be sent by us to you via e-mail. Please
                        ensure that you verify the contents of each document received from us. Such
                        documents shall, in the absence of manifest error be conclusive unless you notify us
                        in writing to the contrary within three working days of receiving such documents. We normally prepare valuations of your account each working day, which we send to
                        you on the first working day following.
                    </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Termination </h1>
                    <p class="uk-text-justify uk-text-meta">This agreement shall remain in effect until terminated by either party. LUCKY ANT TRADING LIMITED
                        reserves the right, at its sole discretion and at any time, to terminate this agreement, with such termination taking effect on the date on which termination notice has been
                        given and payments made to the Client. The Client may terminate this agreement by
                        providing written notice, which will be effective upon receipt of the notice or, if received
                        or deemed to be received on a day that is not a business day, then the first business
                        day thereafter. Termination will not affect any legal rights or obligations that may have
                        accrued. Upon termination, we will liquidate any outstanding Contracts, and the
                        balance in your account shall be repaid to you by T/T remittance not later than four
                        working days after the agreement terminates.
                    </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Notices </h1>
                    <p class="uk-text-justify uk-text-meta">Any written notice, instruction, demand, acknowledgement or request to be given
                        hereunder or any Contract shall be in writing and (unless delivered personally) shall
                        be given by facsimile (fax), e-mail or first class pre-paid post (airmail if sent
                        internationally) and be addressed in our case to our address or e-mail address and in
                        your case to the address or email address last notified by you to us. If you or we wish
                        to change the address for communication, we shall each give to the other no less than
                        five days’ notice in writing of the change desired. Notices addressed as provided
                        above shall be deemed to have been duly given when dispatched (in the case of
                        e-mail and fax, when delivered (in the case of personal delivery), two (2) days after
                        posting (in the case of letters sent in the same country), or five (5) days after posting
                        (in the case of letters sent internationally), provided that notices to us shall be
                        effective only upon their actual receipt by us. In each of the above cases any notice
                        received on a non-working day or after business hours in the country of receipt shall
                        be deemed to be given on the next following working day in such country.
                    </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Governing Laws</h1>
                    <p class="uk-text-justify uk-text-meta">The terms of this client agreement, and the rights and obligations of the clients hereto, shall be governed by, construed, and enforced in all respects by the laws of United
                        States. Clients, to induce LUCKY ANT TRADING LIMITED to accept these terms, and for other good and
                        valuable consideration, hereby agree that any judicial, administrative action, or
                        proceeding, including, but not limited to, arbitration arising directly or indirectly
                        hereunder or in connection with the transactions contemplated hereby, whether
                        brought by Client or LUCKY ANT TRADING LIMITED, shall be held, at the sole discretion of LUCKY ANT TRADING LIMITED, within United States. Clients consent and submit to, and waive any and all objections
                        Client may have to such venue, and further agree to waive and forego any right Client
                        may have to transfer or change the venue of any action or proceeding encompassed
                        hereby.
                    </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Risk Disclosure</h1>
                    <p class="uk-text-justify uk-text-meta">You should not deal in these products or engage any of these services unless you
                        understand the nature and the exposure to risk.You should also be satisfied that the
                        product is suitable for you in light of your circumstances and financial position. Different instruments involve different levels of exposure to risk, and in deciding
                        whether to trade in such instruments you should be aware of the following factors
                        concerning trading the derivatives products in LUCKY ANT TRADING LIMITED.
                    </p>
                    <ol style=" list-style-type:lower-alpha">
                    <li>Futures</li>
                    <p class="uk-text-justify uk-text-meta">Transactions in futures involve the obligation to make, or take delivery of the
                        underlying asset of the contract at a future date, or in some cases to settle your
                        position with cash. They carry a high degree of risk. The “gearing” or “leverage” often
                        obtainable in futures trading means that a small deposit or down payment can lead to
                        large losses as well as gains. It also means that a relatively small market movement
                        can lead to a proportionally much larger movement in the value of your investment, and this can work against you as well as for you. Futures transactions have a
                        contingent liability and you should be aware of the implications of this, in particular the
                        margining requirement.</p>
                    <li>Contracts for Difference</li>
                    <p class="uk-text-justify uk-text-meta">Futures and Options contracts can also be referred to as contracts for difference.
                        These can be options and/or futures on the FTSE 100 index or any other index or
                        share, commodity or currency. However, unlike other futures and options, these
                        contracts can only be settled in cash. Investing in contracts for difference carries the
                        same risks as investing in a future or an option and you should be aware of these as
                        set out in paragraphs A respectively. Transactions in contracts for difference may also
                        have a contingent liability and you should be aware of the implications of this.</p>
                    </ol>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Internet Dealing </h1>
                    <ul>
                        <li class="uk-text-justify uk-text-meta uk-margin-bottom">You acknowledge that the internet is, due to unpredictable traffic congestion and
                            other reasons, an inherently unreliable medium of communication and that such
                            unreliability is beyond our control.</li>
                        <li class="uk-text-justify uk-text-meta uk-margin-bottom">Trading on the internet is not instantaneous and several seconds may elapse
                            between the time when you give your order via the internet to us and the time when
                            it is received by us, in which time the market may have moved and your order may
                            be implemented at a different value from that when you initiated the order on your
                            PC.</li>
                        <li class="uk-text-justify uk-text-meta uk-margin-bottom">We reserve the right not to execute an order by you until it has been received by us.</li>
                        <li class="uk-text-justify uk-text-meta uk-margin-bottom">We shall not be liable for any loss, expense, cost or liability (including consequential
                            loss) suffered or incurred by you as a result of instructions being given or any other
                            communications being made via e-mail or via the internet.</li>
                        <li class="uk-text-justify uk-text-meta uk-margin-bottom">You will solely be responsible for all orders and for the accuracy of all information
                            sent via the internet using your name or personal identification number.</li>
                        <li class="uk-text-justify uk-text-meta uk-margin-bottom">You further acknowledge and agree that there are risks of misunderstandings or
                            errors in any communication and that such risks shall be absolutely borne by you.</li>
                        <li class="uk-text-justify uk-text-meta uk-margin-bottom">You acknowledge and agree that it shall not usually be possible to cancel an
                                instruction after it has been given.</li>
                        <li class="uk-text-justify uk-text-meta uk-margin-bottom">The time shown by our electronic logging system and the information contained on
                            our server shall be conclusive between us as to the exact time of receipt of any
                            messages or order and as to the accuracy of the information.</li>
                    </ul>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Force Majeure Events</h1>
                    <p class="uk-text-justify uk-text-meta">We may, in our reasonable opinion, determine that an emergency or an exceptional
                        market condition exists (a “Force Majeure Event”). A Force Majeure Event shall
                        include, but is not limited to, the following:</p>
                    <ul>
                        <li class="uk-text-justify uk-text-meta uk-margin-bottom">Any act, event or occurrence (including without limitation any strike, riot or civil
                            commotion, hostilities, foreign intervention, governmental actions, natural disaster, Act of God, an interruption of power supply or electronic or communication
                            equipment failure) which, in our opinion, prevents us from maintaining an orderly
                            market in one or more of the investments in respect of which we ordinarily deal in Contracts.</li>
                        <li class="uk-text-justify uk-text-meta uk-margin-bottom">The suspension or closure of any market or the abandonment or failure of any event
                            upon which we base, or to which we in any way relate our quote, or the imposition
                            of limits or special or unusual terms on the trading in any such market or in any
                            such event.</li>
                        <li class="uk-text-justify uk-text-meta">The occurrence of any excessive movement in the level of any Contract and/or the
                            underlying market or our anticipation (acting reasonably) of the occurrence of such
                            movements.</li>
                    </ul>
                    <p class="uk-text-justify uk-text-meta">If we determine that a Force Majeure Event exists we may in our absolute discretion
                        without notice and at any time take one or more of the following steps :  </p>
                    <p class="uk-text-justify uk-text-meta">Increase your deposit requirements.</p>
                    <ul>
                        <li class="uk-text-justify uk-text-meta uk-margin-bottom">Close any or all of your open Contracts at such closing level as we reasonably
                            believe to be appropriate.</li>
                        <li class="uk-text-justify uk-text-meta uk-margin-bottom">Suspend or modify the application of all or any of the terms of this agreement to the
                            extent that the Force Majeure Event makes it impossible or impractical for us to
                            comply with the term or terms in question.</li>
                        <li class="uk-text-justify uk-text-meta uk-margin-bottom">Alter the last time for trading for a particular Contract.</li>
                        <li class="uk-text-justify uk-text-meta">Take or omit to take all such other actions as we deem to be reasonably appropriate
                            in the circumstances having to our position, your position and the positions of the
                            other customers.</li>
                    </ul>
                    <p class="uk-text-justify uk-text-meta">In the event of the above events, LUCKY ANT TRADING LIMITED shall not be liable to the Client for any
                        claims, losses, damage, costs, and expenses, including lawyers’ fees, arising directly
                        or indirectly out of such events.</p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Entry Into Force</h1>
                    <p class="uk-text-justify uk-text-meta">This Agreement shall not be deemed accepted by LUCKY ANT TRADING LIMITED and shall not become
                        a binding contract between the Client and LUCKY ANT TRADING LIMITED until the Agreement and the
                        Customer Account Application, including all relevant annexes, have been completed
                        and executed by the Client and received and accepted by LUCKY ANT TRADING LIMITED, a notice
                        whereof shall be given to the Customer.</p>
               
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Risk Warning & Disclaimer</h1>
                    <p class="uk-text-justify uk-text-meta">The facilities we provide are available only to experienced investors with sufficient
                        financial resources to trade in our investment products. The following statements are
                        intended to make you aware of and disclose to you the potential risk and loss in respect to trading on the financial markets. You must familiarize yourself with the
                        nature of CFD trading, the terminology used, and the procedures involved before you
                        enter into any contract. Our rolling spot contracts and CFDs are based on highly
                        leveraged margin trading; as with any derivative instrument, such contracts carry a
                        very high degree of risk, and trading such instruments may expose the investor to
                        substantial losses as well as gains. The gearing and leverage that are obtainable with
                        CFD trading mean that you only need to place a small deposit to commence trading
                        with us, although this small deposit may result in large losses or large gains. You must
                        consider that if the market moves against you, you may sustain a total loss greater
                        than the funds deposited. It is your responsibility to ensure that you are fully aware of
                        all these risks before entering into any contract.</p>
                    <p class="uk-text-justify uk-text-meta">If you have any questions about this Agreement or the nature and suitability of the
                        services we provide, please contact us before commencing any activity on your
                        account. We will assume that, on commencement of business, you are satisfied that
                        all terms relating to your facility with us have been fully understood and accepted by
                        you. We will assess your application from the information available to us and, in
                        particular, the responses you have given in completing the Customer Information
                        Sheet; if you are accepted as a customer, it will be on such a basis. Accordingly, we
                        will classify you as a private customer. You should not proceed with this arrangement
                        unless you have carefully considered that it is appropriate for you and are satisfied
                        with these terms. Investors should note that to protect their interests, we may set zero
                        stop orders where no client order has been placed to minimize losses. In this event, clients cannot lose more than their initial commitment. </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Conflicts of Interest</h1>
                    <p class="uk-text-justify uk-text-meta">We provide herewith a summary of the policy we maintain in order to manage conflicts
                        of interest in respect of the duties we owe to our clients.</p>
                    <h6>General</h6>
                    <p class="uk-text-justify uk-text-meta">A conflict of interest can arise between LUCKY ANT TRADING LIMITED and you as a client or between
                        your interests and those of another client of ours. We aim to establish, maintain, and
                        operate effective organizational and administrative arrangements with a view to taking
                        all reasonable steps to prevent conflicts of interest from constituting or giving rise to a
                        material risk of damage to the interests of our clients. </p>
                    <h6>Our Policy</h6>
                    <p class="uk-text-justify uk-text-meta">We aim to keep a record of the kinds of activity we carry on in which a material conflict
                        could arise or has arisen, and, in doing so, we take account of the activities of other members of our group of companies. We also maintain procedures to ensure
                        appropriate independence between members of our staff who are involved in different
                        activities. This includes the operation of information barriers, the segregation of duties
                        and responsibilities, and the maintenance of a policy of independence that requires
                        our staff, when providing services to a client, to act in the best interests of the client
                        and to disregard any conflicts of interest. In some circumstances, we may decline to
                        act for a client or potential client.</p>
                    <h6>Disclosure : General</h6>
                    <p class="uk-text-justify uk-text-meta">Where our arrangements to manage conflicts are not or cannot be sufficient to
                        reasonably assure that risks of damage to a client’s interest will be prevented, we aim
                        to disclose the general nature and/or sources of conflicts before carrying on business
                        for the client. This is to allow the client to consider whether to ask for more information
                        and whether to continue with the service; we do not aim to provide detailed, highly
                        specific, or comprehensive information.</p>
                    <h6>Gift & Hospitality</h6>
                    <p class="uk-text-justify uk-text-meta">We do not prohibit our staff from receiving small gifts and minor hospitality from other
                        parties with which we do business but only where in the opinion of a director or senior
                        manager it is at a level that is not lavish or excessive and only where it will not impair
                        our duty to act in the best interests of our clients or other legal or regulatory
                        obligations.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-container uk-margin-top" id="trading">
    <div class="uk-grid" uk-grid>
          <!--------Online Trading------------->
        <div class="uk-width-1-1@m uk-margin-top">
            <h2>Online Trading Agreement</h2>
            <p class="uk-text-meta uk-text-justify">
                This Agreement sets forth the terms and conditions under which LUCKY ANT TRADING LIMITED shall
                permit you as our client to have access to one or more terminals, including terminal
                access through your internet browser, for the electronic transmission of orders and/or
                transactions, for your accounts with LUCKY ANT TRADING LIMITED. This Agreement also sets forth the
                terms and conditions under which LUCKY ANT TRADING LIMITED shall permit you electronically to
                monitor the activity, orders and/or transactions in your account (collectively, the “Online Service”). For purposes of this Agreement the term “Online Service”
                includes all software and communications links and in consideration thereof, Client
                agrees to the following:
           </p>
        </div>
        <div class="uk-width-1-1@m">
            <div class="uk-card uk-card-default uk-card-body uk-margin-bottom">
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title">Licence Grant & The Right of Use</h1>
                    <p class="uk-text-justify uk-text-meta">By this Agreement, where LUCKY ANT TRADING LIMITED is supplying the Client with software for use
                        with the Online Service, the Client undertakes to use the software solely for his/her own internal business purposes. Neither the software nor the Online Service may be
                        used to provide third-party training or as a service bureau for any third parties. The
                        Client agrees to use the Online Service and the software strictly in accordance with
                        the terms and conditions of LUCKY ANT TRADING LIMITED Account Opening Documentation, as
                        amended from time to time. The Client also agrees to be bound by any rules, procedures, and conditions established by LUCKY ANT TRADING LIMITED concerning the use of the
                        Online Service provided by LUCKY ANT TRADING LIMITED.</p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title">Accessess and Security</h1>
                    <p class="uk-text-justify uk-text-meta">The Online Service may be used to transmit, receive, and confirm the execution of
                        orders, subject to prevailing market conditions and applicable rules and regulations. LUCKY ANT TRADING LIMITED consents to the Client’s access and use in reliance upon his/her having
                        adopted procedures to prevent unauthorized access to and use of the Online Service.
                        In any event, the Client agrees to bear any financial liability for trades executed
                        through the Online Service. The Client acknowledges, represents, and warrants that:</p>      
                    <ol style="list-style-type: lower-alpha" class="uk-text-meta uk-text-justify">
                        <li class="uk-margin-bottom"> He/She has received a number, code or other sequence, which provides access to
                            the Online Service (“the Password”).</li>
                        <li class="uk-margin-bottom"> He/She is the sole and exclusive owner of the Password.</li>
                        <li class="uk-margin-bottom"> He/She is the sole and exclusive owner of any identification number or login
                            number (“the Login”).</li>
                        <li> He/She accepts full responsibility for use and protections of the Password and the
                            Login as well as for any transaction occurring in an account opened, held or
                            accessed through the Login and/or Password.</li>
                    </ol>
                    <p class="uk-text-meta uk-text-justify">The Client accepts responsibility for the monitoring of his/her account(s). The Client
                        will immediately notify LUCKY ANT TRADING LIMITED in writing if He/She becomes aware of any of the
                        following:</p>
                    <ol style="list-style-type: lower-alpha" class="uk-text-meta uk-text-justify">
                        <li class="uk-margin-bottom"> Any loss, theft or unauthorized use of his/her Password(s), Login and/or account
                            number(s); or</li>
                        <li class="uk-margin-bottom"> Any failure by him/her to receive a message indicating that an order was received
                            and/or executed; or</li>
                        <li class="uk-margin-bottom"> Any failure by him/her to receive an accurate confirmation of an execution; or</li>
                        <li class="uk-margin-bottom"> Any receipt of confirmation of an order and/or execution, which he/she did not
                            place</li>
                        <li> Any inaccurate information in his/her account balances, positions, or transaction
                            history.</li>
                    </ol>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title">Risks of Online Trading</h1>
                    <p class="uk-text-justify uk-text-meta">The Client’s access to the Online Service, or any portion thereof, may be restricted or
                        unavailable during periods of peak demands, extreme market volatility, systems
                        upgrades, or other reasons. LUCKY ANT TRADING LIMITED makes no express or implied
                        representations or warranties to the Client regarding the usability, condition, or
                        operation thereof. LUCKY ANT TRADING LIMITED does not warrant that access to or use of the Online
                        Service will be uninterrupted or error-free or that the Online Service will meet any
                        particular criteria of performance or quality.
                    </p>
                    <p class="uk-text-justify uk-text-meta">Since LUCKY ANT TRADING LIMITED does not control signal power, its reception or routing via the
                        internet, configuration of your equipment, or reliability of its connection, we cannot be
                        responsible for communication failure, distortions, or delays when trading online via
                        the internet.</p>
                    <p class="uk-text-justify uk-text-meta">Under no circumstances, including negligence, shall LUCKY ANT TRADING LIMITED or anyone else
                        involved in creating, producing, delivering, or managing the Online Service be liable
                        for any direct, indirect, incidental, special, or consequential damages that result from
                        the use of or inability to use the Online Service, or out of any breach of any warranty,
                        including, without limitation, those for business interruption or loss of profits.</p>        
                    <p class="uk-text-justify uk-text-meta">The Client expressly agrees that his/her use of the Online Service is at his/her sole
                        risk. The Client assumes full responsibility and risk of loss resulting from the use of, or
                        materials obtained through the Online Service. Neither LUCKY ANT TRADING LIMITED nor other
                        suppliers providing data, information, or services warrant that the Online Service will
                        be uninterrupted or error-free; nor does LUCKY ANT TRADING LIMITED make any warranty as to the
                        results that may be obtained from the use of the Online Service or as to the timeliness, sequence, accuracy, completeness, 
                        reliability, or content of any information, service, or transaction provided through the Online Service.</p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Market Data & Information</h1>
                    <p class="uk-text-justify uk-text-meta">Neither LUCKY ANT TRADING LIMITED nor any provider shall be liable in any way to the Client or to any
                        other person for:
                    </p>
                  <ol style="list-style-type: lower-alpha" class="uk-text-justify uk-text-meta">
                    <li class="uk-margin-bottom"> Any inaccuracy, error or delay in, or omission of any such data, information or
                        message or the transmission or delivery of any such data, information or message; or</li>  
                    <li> LUCKY ANT TRADING LIMITED shall not be liable for any loss or damage arising from or occasioned
                        by any inaccuracy, error, delay, omission, non-performance, or interruption in any data,
                        information, or message, due to any negligent act or omission or to any condition of
                        force majeure or any other cause, whether or not within LUCKY ANT TRADING LIMITED or any provider’s
                        control. LUCKY ANT TRADING LIMITED shall not be deemed to have received any order or
                        communication transmitted electronically by the Client until LUCKY ANT TRADING LIMITED has actual knowledge of such order or communication. Additionally, if a client executed a trade at
                        a price which at the time the trade was executed was wrong and/or delayed from the
                        actual market price, then LUCKY ANT TRADING LIMITED may cancel that trade from the Client’s
                        account.</li>
                  </ol>    
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Representations</h1>
                    <p class="uk-text-justify uk-text-meta">The Client acknowledges that the Online Service may, from time to time, be
                        unavailable for operational reasons, including servicing, hardware malfunction, software defect, service or transmission interruption, or other causes. The Client
                        agrees to hold LUCKY ANT TRADING LIMITED and any provider harmless from liability for any damage
                        resulting from the unavailability of the Online Service. The Client further
                        acknowledges the need for alternative arrangements to remain in place for the
                        transmission and execution of orders in the event that circumstances prevent the use
                        of the Online Service.
                    </p>
                    <p class="uk-text-justify uk-text-meta">The Client represents and warrants that they are fully authorized and not under any
                        legal disability to enter into this Agreement or engage in trading. The Client commits to
                        ongoing compliance with all applicable laws, rules, and regulations governing their
                        business activities. The Client agrees to be familiar with and adhere to any rules or
                        procedures established by LUCKY ANT TRADING LIMITED and any providers related to the use of the
                        Online Service, and to undergo any necessary training for its proper use. The Client
                        shall not, and shall not permit any third party to, copy, use, analyze, modify, decompile, disassemble, reverse engineer, translate, or convert any software provided in
                        connection with the Online Service, nor shall they distribute such software or the
                        Online Service to any third party."</p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Termination</h1>
                    <p class="uk-text-justify uk-text-meta">LUCKY ANT TRADING LIMITED reserves the right to terminate or restrict the Client's access to the Online
                        Service and may terminate this Agreement at its sole discretion. In the event of
                        termination, any software license granted to the Client under this Agreement shall
                        automatically cease.
                    </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Indemnity</h1>
                    <p class="uk-text-justify uk-text-meta">The Client agrees to indemnify and hold LUCKY ANT TRADING LIMITED harmless from and against any
                        and all claims, losses, liabilities, damages, costs and expenses (including reasonable
                        legal fees) arising out of or related to this Agreement and due to any error that the
                        Client fail to correct or arrange for LUCKY ANT TRADING LIMITED to correct (if possible). This
                        indemnification shall be binding upon the Client and the Client’s executors, administrators, heirs, successors and permitted assigns and will survive termination of
                        this Agreement.
                    </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Miscellaneous</h1>
                    <p class="uk-text-justify uk-text-meta">The Client is not authorized to amend the terms of this Agreement. LUCKY ANT TRADING LIMITED
                        reserves the right to amend the terms of this Agreement, with notice to the Client
                        (including electronic delivery). Continued access to and use of the Online Service by
                        the Client constitutes agreement to any amendments made to this Agreement. This
                        Agreement is supplementary to the Customer Agreement.
                    </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Declaration of Acceptance</h1>
                    <p class="uk-text-justify uk-text-meta">I have reviewed the complete Investment Terms & Conditions and hereby give my
                        consent to be bound by all the terms outlined therein. I confirm that the information
                        provided in this Account Opening Documentation is accurate and true. Additionally, I
                        certify that the electronic signature affixed herein is authentic, and the copies of the
                        identification documents submitted are true replicas of the originals.
                    </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Risk and Disclaimer </h1>
                    <p class="uk-text-justify uk-text-meta">By submitting the registration form to download the demo, requesting a quick call
                        back, or registering for the newsletter, you are providing consent to receive
                        information via email, telephone, post, or any other method from LUCKY ANT TRADING LIMITED. This
                        information may include details about offers, products, and services that we believe
                        may be of interest to you. Your details will not be shared with any third parties for
                        marketing purposes without your prior consent, except for our affiliated companies. If
                        you no longer wish to receive this information, please utilize the unsubscribe feature
                        within any email sent to you, or you may email us directly to have your details
                        removed from our database.
                    </p>
                    <p class="uk-text-justify uk-text-meta">Our rolling spot contracts and CFDs involve highly leveraged margin trading. These
                        derivative instruments carry a significant level of risk, and trading them may result in
                        substantial losses or gains. The information on this site and the services we offer are
                        intended for experienced investors with sufficient financial resources to engage in
                        trading our investment products. To protect client interests, we may implement zero
                        stop orders in the absence of client orders to minimize losses. In such cases, clients
                        typically cannot lose more than their initial investment in a specific transaction. </p>
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title"> Privacy Policy </h1>
                    <p class="uk-text-justify uk-text-meta">The Privacy Policy outlines the procedures followed by LUCKY ANT TRADING LIMITED in the collection, utilization, and disclosure of personal information. It delineates the rights of the clients
                        concerning their data. LUCKY ANT TRADING LIMITED will periodically review the Privacy Policy Statement to align with new laws, technological advancements, operational changes, and evolving practices, ensuring its continued relevance. The information in our
                        possession will be subject to the latest LUCKY ANT TRADING LIMITED Privacy Policy Statement.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-1-1@m">
                <div class="uk-card uk-card-large uk-card-default">                            
                    <div class="uk-card-body">
                        <h2>FAQ</h2>
                        <hr class="uk-margin-medium-top uk-margin-small-bottom">
                        <ul class="in-faq-5" data-uk-accordion="collapsible: false">
                            <li class="uk-open">
                                <a class="uk-accordion-title uk-text-default" href="#">Why does LUCKY ANT TRADING LIMITED collect personal information ?</a>
                                <div class="uk-accordion-content">
                                    <p class="uk-text-justify uk-text-meta">Our business is to meet our customers' needs for a range of financial services. To do
                                            this effectively, we need to collect certain personal information.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title uk-text-default" href="#">What kind of personal information do we ask for ?</a>
                                <div class="uk-accordion-content">
                                
                                        <p class="uk-text-justify uk-text-meta">The type of personal information we may collect can include (but is not limited to)
                                            name, address, date of birth, contact details, income, assets and liabilities, account
                                            balances, trading statements, tax and financial statements and employment details. We obtain most of the information directly from our customers through application or
                                            other forms, and from maintaining records of information provided in the course of
                                            ongoing customer service. We may also obtain information from other sources. We
                                            may ask for other information voluntarily from time to time (for example, through
                                            market research, surveys or special offers) to enable us to improve our service or
                                            consider the wider needs of our customers or potential customers. If you choose not
                                            to provide the information we need to fulfill your request for a specific product or
                                            service, we may not be able to provide you with the requested product or service</p>
                                
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title uk-text-default" href="#">How do we store personal information ?</a>
                                <div class="uk-accordion-content">
                                    <p class="uk-text-justify uk-text-meta"> Safeguarding the privacy of your information is important to us, whether you interact
                                        with us personally, by phone, mail, over the internet or other electronic medium. We
                                        hold personal information in a combination of secure computer storage facilities and
                                        paper-based files and other records, and take steps to protect the personal
                                        information we hold from misuse, loss, unauthorized access, modification or
                                        disclosure. We may need to maintain records for a significant period of time. However, when we consider information is no longer needed, we will remove any details that will
                                        identify you or we will securely destroy the records.</p>
                                </div>
                            </li>
                        </ul>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

