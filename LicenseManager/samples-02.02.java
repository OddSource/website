import net.nicholaswilliams.java.licensing.License;
import net.nicholaswilliams.java.licensing.licensor.*;

public class LicenseCreationService
{
    ...
    public void createLicense()
    {
        ...
        License license = new License.Builder().
                withProductKey("5565-1039-AF89-GGX7-TN31-14AL").
                withHolder("Customer Name").
                withGoodBeforeDate(expirationDate).
                withFeature("FEATURE1").
                withFeature("FEATURE2", feature2ExpDate).
                build();
        
        byte[] licenseData = LicenseCreator.getInstance().signAndSerializeLicense(license, "license password".toCharArray());
        ...    
    }
    ...
}
