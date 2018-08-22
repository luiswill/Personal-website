import {html, PolymerElement} from '@polymer/polymer/polymer-element.js';
import '../teaser/teaser.js';



/**
 * @customElement
 * @polymer
 */
class TeaserRow extends PolymerElement {
    static get template() {
      return html`
        <style>
            .teaserRow {
                width: 100%;
            }
        </style>
        <div class="teaserRow">
          <my-teaser title="Australia" img-source="https://i.guim.co.uk/img/media/8dd76593ae3cea74441c8089aba344f13bbe17dd/2216_1108_2887_1732/master/2887.jpg?w=700&q=55&auto=format&usm=12&fit=max&s=2f4936f2fbab7a902439c8c40465cc64" img-placeholder="Australia"></my-teaser>
          <my-teaser title="Thailand" img-source="https://itzeazy.in/blog/wp-content/uploads/2018/04/Phuket-Thailand_visa-itzeazy.jpg" img-placeholder="Thailand"></my-teaser>
          <my-teaser title="Australia" img-source="https://i.guim.co.uk/img/media/8dd76593ae3cea74441c8089aba344f13bbe17dd/2216_1108_2887_1732/master/2887.jpg?w=700&q=55&auto=format&usm=12&fit=max&s=2f4936f2fbab7a902439c8c40465cc64" img-placeholder="Australia"></my-teaser>
          <my-teaser title="Australia" img-source="https://i.guim.co.uk/img/media/8dd76593ae3cea74441c8089aba344f13bbe17dd/2216_1108_2887_1732/master/2887.jpg?w=700&q=55&auto=format&usm=12&fit=max&s=2f4936f2fbab7a902439c8c40465cc64" img-placeholder="Australia"></my-teaser>
        </div>
      `;
    }
  }
  
  window.customElements.define('teaser-row', TeaserRow);
  