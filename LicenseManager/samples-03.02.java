import net.nicholaswilliams.java.licensing.*;
import net.nicholaswilliams.java.licensing.exception.*;

public class LicenseUsageService
{
    ...
    public void useLicense()
    {
        ...
        LicenseManager manager = LicenseManager.getInstance();
        
        License license = manager.getLicense("client1");
        try {
            manager.validateLicense(license);
        } catch(ExpiredLicenseException | InvalidLicenseException e) { return; }
        
        int seats = license.getNumberOfLicenses();
        
        boolean bool;
        try {
            bool = manager.hasLicenseForAllFeatures("client2", "feature1", "feature2");
        } catch(ExpiredLicenseException | InvalidLicenseException e) { bool = false; }
        ...    
    }
    ...
}
